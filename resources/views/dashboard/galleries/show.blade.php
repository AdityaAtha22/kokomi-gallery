@extends('dashboard.layouts.main-cru')
@section('content')
<div class="overflow-y-auto">
    <div class="w-full lg:w-3/5 bg-white shadow-lg rounded-lg mx-auto my-28 px-2 lg:px-6 py-10 lg:py-20">
        {{-- title --}}
        <h1 class="text-3xl lg:text-5xl text-dark text-center font-semibold mb-7">{{ $gallery->title }}</h1>
        {{-- label category --}}
        <a href="/galleries?category={{ $gallery->category->slug }}" class="inline-block text-white bg-ocean hover:bg-blue-500 rounded-md my-6 lg:my-8 p-2 transition duration-300 ease-in-out">{{ $gallery->category->name }}</a>
        {{-- image --}}
        <img src="{{ asset('storage/'. $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-60 lg:h-[430px] mx-auto">
        {{-- author dan tanggal upload postingan --}}
        <p class="text-base text-dark mt-3 mb-6">Ditulis oleh <a href="" class="text-blue-600 font-medium">{{ $gallery->user->name }}</a> pada <span class="text-green-700 font-semibold">{{ $gallery->created_at->diffForHumans() }}</span></p>
        {{-- body --}}
        <span class="text-dark text-xl">{!! $gallery->body !!}</span>
    </div>
</div>
@endsection