<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $tittle = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = USer::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('posts', [
            "tittle" => "All Posts" . $tittle,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }

    public function  show(Post $post)
    {
        return view('post', [
            "tittle" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
