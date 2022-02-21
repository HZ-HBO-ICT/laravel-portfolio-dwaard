<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function show()
    {
        // Take the 3 newest posts
        $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();

        return view('welcome', compact('latestPosts'));
    }

}
