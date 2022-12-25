@extends('layouts.main')
@section('content')
<div class="container my-28">
    {{-- page title --}}
    <h1 class="text-3xl lg:text-4xl text-dark dark:text-white text-center font-semibold mb-12 fontInter">{{ $titlePage }}</h1>
    {{-- jika postingan ada --}}
    @if ($galleries->count())
    <div class="flex flex-wrap justify-evenly">
        {{-- card --}}
        @foreach ($galleries as $gallery)
        <div class="max-w-xs w-full bg-white shadow-lg rounded-lg px-3 py-5 mx-2 mb-8">
            {{-- label category --}}
            <a href="/galleries?category={{ $gallery->category->slug }}" class="absolute bg-dark text-white rounded-tl-md py-1 px-2">{{ $gallery->category->name }}</a>
            {{-- card image --}}
            <img src="{{ asset('storage/'. $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-64 object-cover rounded-lg mx-auto">
            {{-- card body --}}
            <div>
                {{-- title --}}
                <h2 class="text-lg lg:text-xl text-blue-600 font-semibold my-2">{{ $gallery->title }}</a></h2>
                <hr class="border-dark">
                {{-- author --}}
                <p class="text-sm my-3">Ditulis oleh <a href="" class="text-blue-600 font-medium">{{ $gallery->user->name }}</a></p>
                {{-- excerpt --}}
                <p class="mb-5">{{ $gallery->excerpt }}</p>
                {{-- tombol baca selengkapnya --}}
                <a href="/galleries/{{ $gallery->slug }}" class="inline-block w-full bg-blue-400 hover:bg-blue-600 text-white rounded-md p-2">Baca selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
    {{-- jika postingan tidak ada --}}
    @else
    <p class="text-secondary">Tidak ada data.</p>
    @endif
</div>
@endsection