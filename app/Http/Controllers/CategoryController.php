<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategories()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function showCategory(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'galleries' => $category->galleries,
            'category' => $category->name
        ]);
    }
}
