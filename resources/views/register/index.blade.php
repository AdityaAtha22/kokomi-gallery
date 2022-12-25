@extends('layouts.main-login-regis')

@section('content')
<div class="w-screen h-screen flex justify-center items-center">
    {{-- kotak form --}}
    <form class="p-10 bg-white rounded-xl drop-shadow-lg space-y-5" action="/register" method="post">
        @csrf
        {{-- judul form --}}
        <h1 class="text-center text-3xl font-medium">Register</h1>
        {{-- input name --}}
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-medium" for="name">Name</label>
            <input class="w-full lg:w-96 px-3 py-2 rounded-md border border-slate-400 @error('name') border-red-500 @enderror" type="text" placeholder="Masukan name" value="{{ old('name') }}" name="name" id="name" required>
            @error('name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        {{-- input username --}}
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-medium" for="username">Username</label>
            <input class="w-full lg:w-96 px-3 py-2 rounded-md border border-slate-400 @error('username') border-red-500 @enderror" type="text" placeholder="Your username" value="{{ old('username') }}" name="Masukan username" id="username" required>
            @error('username')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        {{-- input email --}}
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-medium" for="email">Email</label>
            <input class="w-full lg:w-96 px-3 py-2 rounded-md border border-slate-400 @error('email') border-red-500 @enderror" type="email" placeholder="Masukan email" value="{{ old('email') }}" name="email" id="email" required>
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        {{-- input password --}}
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-medium" for="password">Password</label>
            <input class="w-full lg:w-96 px-3 py-2 rounded-md border border-slate-400 @error('password') border-red-500 @enderror" type="password" placeholder="Masukan password" value="{{ old('password') }}" required name="password" id="password">
            @error('password')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        {{-- tombol register --}}
        <button class="w-full px-10 py-2 bg-blue-600 text-white rounded-md
        hover:bg-blue-500 hover:drop-shadow-md duration-300 ease-in" type="submit">
            Register
        </button>
        {{-- <p class="text-right"><a class="text-blue-600 text-sm font-light hover:underline" href="/login">Sudah register? Login sekarang!</a></p> --}}
    </form>
</div>
@endsection