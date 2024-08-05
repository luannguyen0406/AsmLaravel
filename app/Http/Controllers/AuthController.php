<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequests;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
    public function register(RegisterRequests $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Bạn đã đăng kí thành công. Vui lòng đăng nhập');
    }
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequests $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            /**
             * @var User $user
             */
            $user = Auth::user();
            if($user->AdminMiddleware()){
                return redirect()->route('admin');
            }
            return redirect()->route('menber');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
