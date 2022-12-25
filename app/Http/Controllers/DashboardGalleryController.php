<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.layouts.main', [
            'title' => 'Galleries Dashboard',
            'galleries' => Gallery::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galleries.create', [
            'title' => 'Create Data',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|min:5',
            'slug' => 'required|unique:galleries',
            'category_id' => 'required',
            'body' => 'required|min:10',
            'image' => 'required|image|file|max:2000'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 30, '...');

        Gallery::create($validatedData);
        return redirect('/dashboard/galleries')->with('success', 'Data has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('dashboard.galleries.show', [
            'title' => $gallery->title,
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.galleries.edit', [
            'title' => 'Edit Data',
            'gallery' => $gallery,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'title' => 'required|max:255|min:5',
            'category_id' => 'required',
            'image' => 'required|image|file|max:2000',
            'body' => 'required|min:10'
        ];

        if ($request->slug != $gallery->slug) {
            $rules['slug'] = 'required|unique:galleries';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Gallery::where('id', $gallery->id)->update($validatedData);
        return redirect('/dashboard/galleries')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);
        return redirect('/dashboard/galleries')->with('success', 'Data has been deleted!');
    }
}
