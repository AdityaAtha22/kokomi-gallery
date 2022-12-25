<footer class="bg-dark dark:bg-slate-300 pt-24 pb-12">
    {{-- container --}}
    <div class="container">
        <div class="flex flex-wrap">
            {{-- owner --}}
            <div class="w-full md:w-1/3 text-secondary font-medium font-inter mb-12 px-4">
                <h2 class="text-4xl lg:text-5xl text-center lg:text-left text-brand font-bold font-kaushanscript mb-12 lg:mb-5">Yoi Project</h2>
                <h3 class="text-xl lg:text-xl text-white dark:text-dark font-bold mb-5">Hubungi Saya</h3>
                <a href="mailto:aoikagura26@gmail.com?subject=Request%20Postingan" class="block hover:text-ocean text-sm lg:text-base mb-3">aoikagura26@gmail.com</a>
                <a href="https://api.whatsapp.com/send?phone=6285350785015&text=Halo%20kak,%20izin%20request%20postingan." class="block hover:text-ocean text-sm lg:text-base mb-3">085350785015</a>
                <p class="text-sm lg:text-base">Kalimantan Barat, Indonesia</p>
            </div>
            {{-- post category --}}
            <div class="w-full lg:w-1/3 font-inter mb-12 px-4">
                <h3 class="text-xl lg:text-xl text-white dark:text-dark font-bold mb-5">Gallery Category</h3>
                <ul class="text-secondary">
                    {{-- nature --}}
                    <li>
                        <a href="/galleries?category=nature" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Nature</a>
                    </li>
                    {{-- historical building --}}
                    <li>
                        <a href="/galleries?category=historical-building" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Historical Building</a>
                    </li>
                    {{-- art & culture --}}
                    <li>
                        <a href="/galleries?category=art-culture" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Art & Culture</a>
                    </li>
                    {{-- people --}}
                    <li>
                        <a href="/galleries?category=people" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">People</a>
                    </li>
                </ul>
            </div>
            {{-- links --}}
            <div class="w-full lg:w-1/3 font-inter mb-12 px-4">
                <h3 class="text-xl lg:text-xl text-white dark:text-dark font-bold mb-5 fontInter">Links</h3>
                <ul class="text-secondary">
                    {{-- home --}}
                    <li>
                        <a href="/" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Home</a>
                    </li>
                    {{-- news --}}
                    <li>
                        <a href="/news" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">News</a>
                    </li>
                    {{-- gallery --}}
                    <li>
                        <a href="/galleries" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Gallery</a>
                    </li>
                    {{-- category --}}
                    <li>
                        <a href="/categories" class="inline-block text-sm lg:text-base hover:text-ocean font-medium mb-3">Category</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- copyright --}}
        <div class="w-full font-inter border-t border-slate-700 pt-10">
            <p class="text-center text-xs lg:text-sm text-slate-500">&copy; {{ date('Y') }} · Dibuat dengan <span>❤️</span> oleh <a href="#" target="_blank" class="text-brand font-semibold">Yoi Project</a></p>
        </div>
    </div>
</footer>