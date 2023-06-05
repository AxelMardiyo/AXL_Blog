<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $category = $category['name'];
            $title = 'in ' . $category;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $author = $author['name'];
            $title = 'by ' . $author;
        }

        return view('blogs', [
            "title" => "All Post " . $title,
            "active" => "blogs",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $blog)
    {
        return view('blog', [
            "title" => "Single Post",
            "active" => "blogs",
            "post" => $blog
        ]);
    }
}
