@extends('layouts.main-login-regis')
@section('content')
<div class="w-screen h-screen flex justify-center items-center fontInter">
  {{-- kotak form --}}
  <form class="bg-white rounded-xl drop-shadow-lg space-y-5 px-6 py-10" action="/login" method="post">
    {{-- judul form --}}
    <h1 class="text-center text-2xl lg:text-3xl font-bold">Login Admin</h1>
    {{-- login error --}}
    @if (session()->has('loginError'))
    <div class="w-full relative text-white bg-red-500 border-0 rounded mx-auto px-6 py-4 mb-4">
      <span class="inline-block align-middle mr-8">
        {{ session("loginError") }}
      </span>
      {{-- tombol x alert --}}
      <button class="absolute bg-transparent text-2xl leading-none font-semibold outline-none focus:outline-none right-0 top-0 mt-4 mr-6" onclick="closeAlert(event)">
        <span>×</span>
      </button>
    </div>
    @endif
    @csrf
    {{-- input email --}}
    <div class="flex flex-col space-y-2">
      <label class="text-base font-medium" for="email">Email</label>
      <input class="w-full lg:w-96 rounded-md border border-slate-400 px-3 py-2 @error('email') border-red-500 @enderror" type="email" placeholder="Masukan email" value="{{ old('email') }}" name="email" id="email" autofocus />
      @error('email')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- input password --}}
    <div class="flex flex-col space-y-2">
      <label class="text-base font-medium" for="password">Password</label>
      <input class="w-full lg:w-96 rounded-md border border-slate-400 px-3 py-2 @error('password') border-red-500 @enderror" type="password" placeholder="Masukan password" name="password" id="password" autofocus autocomplete="off" />
      @error('password')
      <div class="text-red-500">{{ $message }}</div>
      @enderror
    </div>
    {{-- tombol login --}}
    <button class="w-full bg-green-600 hover:bg-green-700 text-white rounded-md hover:drop-shadow-md px-10 py-2 transition duration-300 ease-out" type="submit">Login</button>
    {{-- link ke halaman register --}}
    {{-- <p class="text-right">
      <a class="text-dark text-sm font-light" href="/register">Belum register?
        <span class="text-blue-500 font-semibold">Register sekarang!</span></a>
    </p> --}}
  </form>
</div>
@endsection