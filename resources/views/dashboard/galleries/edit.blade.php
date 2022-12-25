@extends('dashboard.layouts.main-cru')
@section('content')
<div class="overflow-y-scroll text-dark fontInter bg-white">
  <div class="container">
    {{-- page title --}}
  <h3 class="text-3xl lg:text-4xl font-medium mt-6 mb-8">Edit Data</h3>
  {{-- enctype digunakan untuk menangani inputan file --}}
  <form method="post" action="/dashboard/galleries/{{ $gallery->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    {{-- title --}}
    <div class="mb-5">
      <label class="block text-base font-medium mb-2" for="title">Title</label>
      <input class="w-full lg:w-96 rounded-md border px-3 py-2 border-slate-400 @error('title') border-red-500 @enderror" type="text" placeholder="Masukan title" value="{{ old('title', $gallery->title) }}" name="title" id="title" autofocus autocomplete="off" />
      {{-- jika input error --}}
      @error('title')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- slug --}}
    <div class="mb-5">
      <label class="block text-base font-medium mb-2" for="slug">Slug</label>
      <input class="w-full lg:w-96 rounded-md border px-3 py-2 border-slate-400 @error('slug') border-red-500 @enderror" type="text" placeholder="Tidak perlu diisi" value="{{ old('slug', $gallery->slug) }}" name="slug" id="slug" autofocus autocomplete="off" readonly />
      {{-- jika input error --}}
      @error('slug')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- category --}}
    <div class="mb-5">
      <label class="block text-base font-medium mb-2" for="category">Category</label>
      <select class="w-full lg:w-96 rounded-md border px-3 py-2" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id', $gallery->category_id) == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    {{-- image --}}
    <div class="mb-5">
      <label class="block text-base font-medium mb-2" for="image">Image</label>
      <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
      <img src="{{ asset('storage/' . $gallery->image) }}" class="block w-4/5 lg:w-2/6 mb-3">
      <input class="block w-full lg:w-1/2 text-base text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer px-3 py-2" type="file" name="image" id="image">
      {{-- jika input error --}}
      @error('image')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- body --}}
    <div class="mb-5 w-full lg:w-1/2">
      <label class="block text-base font-medium mb-2" for="body">Body</label>
      <input class="flex flex-wrap" id="body" value="{{ old('body', $gallery->body) }}" type="hidden" name="body">
      <trix-editor input="body" autofocus placeholder="Tulis caption mengenai postingan yang ingin anda buat"></trix-editor>
      {{-- jika input error --}}
      @error('body')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- tombol tambah data --}}
    <button type="submit" class="w-full lg:w-auto inline-block text-white bg-green-600 hover:bg-green-700 rounded-md hover:drop-shadow-md my-4 px-10 py-2 transition duration-100 ease-in">Edit</button>
  </form>
  </div>
</div>
@endsection