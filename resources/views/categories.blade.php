@extends('layouts.main')
@section('content')
<div class="container my-28">
    {{-- page title --}}
    <h1 class="text-3xl lg:text-5xl text-dark dark:text-white text-center font-bold mb-12 font-inter">Categories</h1>
    {{-- 4 categories --}}
    <div class="font-inter flex flex-col lg:flex-row items-center justify-evenly">
        @foreach ($categories as $category)
        <a href="/galleries?category={{ $category->slug }}" class="text-xl lg:text-2xl text-white font-medium">
            <div style="background-image: url(/img/{{ $category->image }})" class="w-72 h-72 rounded-lg bg-cover flex items-center justify-center mb-3 lg:hover:scale-y-105 transition duration-300 ease-in-out">
                {{-- label categories --}}
                <span class="w-full bg-dark bg-opacity-40 text-center text-white py-3">{{ $category->name }}</span>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection