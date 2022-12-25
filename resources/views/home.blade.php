@extends('layouts.main')
@section('content')
{{-- hero section --}}
<section id="home" class="min-h-screen flex items-center dark:bg-dark ">
    {{-- container --}}
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full relative text-center self-center px-4">
                <h1 class="text-base lg:text-2xl text-secondary font-medium font-inter">Halo semua 👋, selamat datang di <span class="block text-4xl lg:text-8xl text-ocean font-bold font-courgette my-8">Kokomi Gallery</span></h1>
                <p class="w-full lg:w-1/2 text-base lg:text-xl text-secondary font-normal font-inter leading-loose mx-auto mb-7 lg:mb-10"><span class="text-ocean font-semibold">Kokomi Gallery</span> adalah sebuah website yang dibuat oleh <span class="text-red-600 font-semibold">Yoi Project</span> untuk memamerkan galeri tentang keseharian di Genshin Impact.</p>
                <a href="/galleries" class="inline-block bg-ocean hover:bg-blue-500 text-base text-white font-medium font-inter rounded-md px-8 py-3 transition duration-300 hover:translate-x-1 hover:translate-y-1 ease-in-out">Ayo ke galeri</a>
            </div>
        </div>
    </div>
</section>
{{-- relationship --}}
<section id="relationship" class="bg-slate-800 dark:bg-slate-300 py-16">
    {{-- container --}}
    <div class="container">
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                {{-- genshin logo --}}
                <div class="max-w-md mx-4 lg:mx-6">
                    <img src="/img/logo.png" alt="Logo Genshin Impact" />
                </div>
            </div>
        </div>
    </div>
</section>
{{-- about me --}}
<section id="aboutme" class="dark:bg-dark pt-16">
    {{-- container --}}
    <div class="container">
        <div class="flex flex-wrap">
            {{-- kolom kiri --}}
            <div class="w-full lg:w-1/2 self-center px-4 text-center font-inter lg:text-start">
                <h2 class="text-3xl lg:text-5xl text-ocean font-bold mb-5">About me</h2>
                <p class="w-full lg:w-5/6 text-base text-secondary leading-loose mb-10">Halo, kenalin nama saya Aditya Athawidhahmeisa. Saya adalah founder Yoi Project dan programmer yang telah membuat Kokomi Gallery ini. Semoga kalian yang sedang mengunjungi website saya ini dapat terhibur dan suka ya. <span class="block mt-5">Terimakasih telah mampir 💕.</span></p>
            </div>
            <!-- kolom kanan -->
            {{-- <div class="w-full lg:w-1/2 px-4 self-end">
                <div class="relative lg:right-0 mt-16 lg:mt-9">
                    <img src="/img/yoimiya.png" alt="hero" class="w-[450px] h-80 rotate-3 object-center object-cover mx-auto relative z-10 rounded-xl lg:hover:translate-x-5 lg:hover:-translate-y-5 lg:hover:-rotate-12 lg:hover:scale-105 transition-all duration-300 ease-out"/>
                </div>
            </div> --}}
            <div class="w-full lg:w-1/2 self-end px-4">
                <div class="relative lg:right-0 mt-16 lg:mt-9">
                    <img src="/img/yoimiya.png" alt="Yoimiya" class="w-[500px]" />
                </div>
            </div>
        </div>
    </div>
</section>
{{-- features --}}
<section id="features" class="bg-slate-800 dark:bg-slate-300 pt-36 pb-32">
    {{-- container --}}
    <div class="container">
        {{-- title --}}
        <div class="w-full px-4">
            <div class="text-center font-inter mx-auto mb-16">
                <h2 class="text-3xl lg:text-5xl text-white dark:text-dark font-bold mb-5">Keunggulan</h2>
                <p class="text-base lg:text-lg text-secondary font-normal">Berikut adalah fitur-fitur keunggulan yang dimiliki oleh Kokomi Gallery.</p>
            </div>
        </div>
        {{-- post card --}}
        <div class="flex flex-wrap font-inter">
            {{-- bahasa pemrograman --}}
            <div class="w-full lg:w-1/3 hover:translate-y-2 transition duration-300 ease-in-out px-4">
                <div class="overflow-hidden bg-white rounded-xl dark:bg-slate-800 shadow-lg mb-10">
                    {{-- image --}}
                    <img src="/img/fitur1.png" alt="Bahasa Pemrograman" class="w-full" />
                    {{-- caption --}}
                    <div class="py-8 px-6">
                        <p class="text-center text-lg lg:text-xl text-secondary dark:text-secondary mb-3">Menggunakan framework <span class="text-red-500 dark:text-red-400">Laravel</span> dan framework <span class="text-blue-600 dark:text-ocean">Tailwind CSS</span></p>
                    </div>
                </div>
            </div>
            {{-- design --}}
            <div class="w-full lg:w-1/3 hover:translate-y-2 transition duration-300 ease-in-out px-4">
                <div class="overflow-hidden bg-white rounded-xl dark:bg-slate-800 shadow-lg mb-10">
                    {{-- image --}}
                    <img src="/img/fitur2.png" alt="Design" class="w-full" />
                    {{-- caption --}}
                    <div class="py-8 px-6">
                        <p class="text-center text-lg lg:text-xl text-secondary dark:text-secondary mb-3">Dibuat dengan tampilan yang <span class="text-orange-500 dark:text-orange-400">elegan</span> dan <span class="text-teal-500 dark:text-teal-400">fresh</span> untuk mata</p>
                    </div>
                </div>
            </div>
            {{-- request postingan --}}
            <div class="w-full lg:w-1/3 hover:translate-y-2 transition duration-300 ease-in-out px-4">
                <div class="overflow-hidden bg-white rounded-xl dark:bg-slate-800 shadow-lg mb-10">
                    {{-- image --}}
                    <img src="/img/fitur3.png" alt="Request Postingan" class="w-full" />
                    {{-- caption --}}
                    <div class="py-8 px-6">
                        <p class="text-center text-lg lg:text-xl text-secondary dark:text-secondary mb-3">Menerima <span class="text-green-500 dark:text-green-400">request</span> upload postingan dari teman-teman semua</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- contribute --}}
<section id="contribute" class="dark:bg-dark py-36">
    {{-- container --}}
    <div class="container">
        {{-- title --}}
        <div class="w-full px-4">
            <div class="max-w-3xl text-center mx-auto mb-16 lg:mb-20">
                <h2 class="text-3xl lg:text-5xl text-ocean font-bold font-inter mb-5">Bolehkah saya berkontribusi untuk Kokomi Gallery?</h2>
                <hr class="border-2 border-gray-400 bg-gray-400 dark:border-secondary dark:bg-secondary rounded-full">
            </div>
        </div>
        <div class="flex flex-wrap items-center">
            {{-- kolom kiri --}}
            <div class="w-full lg:w-1/2 mb-12 lg:mb-auto px-4">
                <div class="relative lg:right-0">
                    <img src="/img/layla-hero.jpg" alt="Layla" class="w-[450px] h-80 rotate-3 object-center object-cover relative z-10 rounded-xl mx-auto lg:hover:translate-x-5 lg:hover:-translate-y-5 transition duration-300 ease-in-out" />
                </div>
            </div>
            {{-- kolom kanan --}}
            <div class="w-full lg:w-1/2 px-4">
                <p class="w-full lg:w-5/6 text-base text-left text-secondary leading-loose font-normal font-poppins mb-7 mx-auto lg:mx-0">Boleh banget, hehehe. Teman-teman bisa berkontribusi dengan cara :</p>
                <ul class="font-poppins">
                    <li class="text-base text-secondary list-disc list-inside mb-4">Share kepada teman, keluarga, atau siapapun yang bermain Genshin Impact.</li>
                    <li class="text-base text-secondary list-disc list-inside mb-4">Boleh berdonasi untuk pembayaran hosting perbulan website Kokomi Gallery.</li>
                    <li class="text-base text-secondary list-disc list-inside">Memberikan kritik dan saran yang membangun agar menjadi website yang lebih baik lagi kedepannya.</li>
                </ul>
            </div>
            {{-- <div class="w-full lg:w-1/2 px-4 self-end">
                <div class="relative lg:right-0 mt-16 lg:mt-9">
                    <img src="/img/yoimiya.png" alt="hero" class="w-[500px]" />
                </div>
            </div> --}}
        </div>
    </div>
</section>
{{-- tombol kembali ke atas --}}
<a href="#" class="h-14 w-14 fixed bottom-20 lg:bottom-4 right-4 z-[999] justify-center items-center rounded-full bg-ocean p-4 hover:animate-pulse" id="to-top">
    <span class="block h-5 w-5 text-center rotate-45 border-t-2 border-l-2 align-middle mt-2"></span>
</a>
@endsection