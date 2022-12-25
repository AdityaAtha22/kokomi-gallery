@extends('layouts.main')
@section('content')
<div class="container my-28">
    {{-- page title --}}
    <h1 class="text-3xl lg:text-5xl text-dark dark:text-white text-center font-bold mb-12 font-inter">{{ $titlePage }}</h1>
    {{-- input cari --}}
    <div class="mx-auto mb-12 lg:mb-16">
        <form action="/galleries" class="flex justify-center font-inter">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <input type="text" name="search" id="search" placeholder="Cari postingan disini.." class="w-3/4 lg:w-1/2 rounded-md mr-2 fontPoppins" autocomplete="off">
            <button type="submit" class="h-[42px] bg-green-700 hover:bg-green-900 text-white rounded-md px-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </form>
    </div>
    {{-- jika postingan ada --}}
    @if ($galleries->count())
    <div class="flex flex-wrap justify-evenly mb-8">
        @foreach ($galleries as $gallery)
        <div class="max-w-xs w-full font-poppins bg-white shadow-lg rounded-lg px-3 py-5 mx-2 mb-8">
            {{-- label category --}}
            <a href="/galleries?category={{ $gallery->category->slug }}" class="absolute bg-dark text-white text-sm rounded-tl-md py-1 px-2">{{ $gallery->category->name }}</a>
            {{-- card image --}}
            <img src="{{ asset('storage/'. $gallery->image) }}" alt="" class="w-full h-64 object-cover rounded-lg mx-auto">
            {{-- card body --}}
            <div>
                {{-- title --}}
                <h2 class="text-dark text-lg lg:text-xl font-semibold my-2">{{ $gallery->title }}</a></h2>
                <hr class="border-dark">
                {{-- author dan tanggal upload --}}
                <p class="text-xs my-3">Ditulis oleh <a href="" class="text-blue-600 font-medium">{{ $gallery->user->name }}</a> pada <span class="text-green-700 font-semibold">{{ $gallery->created_at->diffForHumans() }}</span></p>
                {{-- excerpt --}}
                <p class="text-sm mb-5">{{ $gallery->excerpt }}</p>
                {{-- tombol ke halaman gallery.blade.php --}}
                <a href="/galleries/{{ $gallery->slug }}" class="w-full inline-block bg-ocean hover:bg-blue-600 text-center text-white rounded-md p-2 transition duration-300 ease-in-out">Baca selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
    {{-- jika postingan tidak ada --}}
    @else
    <p class="text-2xl lg:text-3xl text-secondary text-center font-medium fontInter my-20 lg:my-40">Tidak ada postingan</p>
    @endif
    {{-- paginate --}}
    {{ $galleries->links() }}
</div>
@endsection