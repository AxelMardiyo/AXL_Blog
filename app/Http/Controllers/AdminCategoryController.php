<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:50|unique:categories'
        ]);

        $data['slug'] = Str::lower($data['name']);
        $data['slug'] = str_replace(' ', '-', $data['slug']);

        Category::create($data);

        return redirect('/dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->get();
        $hasPosts = false;

        foreach ($posts as $post) {
            if ($post->category_id === $category->id) {
                $hasPosts = true;
                break;
            }
        }

        if ($hasPosts) {
            return redirect('dashboard/categories')->with('error', 'There is a post that uses "' . $category->name . '" Category');
        } else {
            Category::destroy($category->id);
            return redirect('/dashboard/categories')->with('success', 'Category has been deleted!');
        }
    }
}
