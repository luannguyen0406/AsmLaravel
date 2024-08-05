<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;


class MenberController extends Controller
{
    function index()
    {
        // dd(Auth::user());
        $menu = Category::all();
        $p = Post::limit(5)->get();
        $new = Post::limit(3)->get();
        $posts = Post::where('view', '>', 4)->limit(2)->get();
        $post = Post::orderByDesc('id')->limit(2)->get();
        $trending = Post::orderByDesc('view')->limit(4)->get();
        return view('client.index', compact('menu', 'p', 'new','post', 'posts', 'trending'));
    }
}
