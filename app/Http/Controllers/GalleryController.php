<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;

class GalleryController extends Controller
{
    public function index()
    {
        $titlePage = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $titlePage = ' in ' . $category->name;
        }

        return view('galleries', [
            'titlePage' => 'All Galleries' . $titlePage,
            'title' => 'Galleries',
            'galleries' => Gallery::latest()->filter(request(['search', 'category']))->paginate(6)
        ]);
    }

    public function show(Gallery $gallery)
    {
        return view('gallery', [
            'title' => $gallery->title,
            'gallery' => $gallery
        ]);
    }
}
