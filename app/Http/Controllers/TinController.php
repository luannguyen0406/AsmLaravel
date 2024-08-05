<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        // dd(Auth::user());
        $menu = Category::all();
        $p = Post::orderByDesc('id')->limit(5)->get();
        $new = Post::limit(3)->get();
        $post = Post::orderByDesc('id')->limit(2)->get();
        
        $posts = Post::orderByDesc('view')->limit(2)->get();
        $trending = Post::orderByDesc('view')->limit(4)->get();
        return view('client.index', compact('menu', 'p','post' ,'new', 'posts', 'trending'));
    }
    function show($id)
    {
        $trending = Post::orderByDesc('view')->limit(4)->get();
        $menu = Category::all();
        $p = Post::find($id);
        $new = Post::limit(3)->get();
        $post = Post::orderByDesc('id')->limit(2)->get();

        $posts = Post::where('view', '<', 7)->limit(2)->get();
        return view('client.detail', compact('p', 'new', 'menu','post','posts', 'trending'));
    }
    public function new($id)
    {
        $trending = Post::orderByDesc('view')->limit(4)->get();

        $post = Post::orderByDesc('id')->limit(2)->get();
        $new = Post::limit(3)->get();
        $p = Post::find($id);
        $menu = Category::all();
        $category = Category::find($id);
        $posts = Post::where('idCategory', $id)
            ->with('category')
            ->orderBy('view', 'desc')
            ->get()
            ->map(function ($post) {
                $post->category_name = $post->category->name;
                return $post;
            });

        return view('client.allnew', compact('category','post', 'posts', 'menu', 'p', 'new', 'trending'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $news = DB::table('posts')->where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return view('client.layout.items.search', ['news' => $news]);
    }
}
