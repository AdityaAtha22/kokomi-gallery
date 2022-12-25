<header class="w-full bg-transparent absolute top-0 left-0 z-10 flex items-center">
    {{-- container --}}
    <div class="container">
        <div class="relative flex justify-between items-center">
            {{-- brand --}}
            <div class="px-4">
                <a href="/" class="block text-2xl lg:text-3xl text-ocean tracking-wide font-bold font-patrickhand py-6">Kokomi Gallery</a>
            </div>
            <div class="flex items-center px-4">
                {{-- hamburger menu --}}
                <button id="hamburger" name="hamburger" type="button" class="block lg:hidden absolute right-4">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                {{-- nav links --}}
                <nav id="nav-menu" class="hidden lg:block max-w-[250px] lg:max-w-full w-full absolute lg:static right-4 top-full rounded-lg lg:rounded-none bg-white lg:bg-transparent dark:bg-slate-800 lg:dark:bg-transparent shadow-lg lg:shadow-none dark:shadow-slate-500 py-5">
                    <ul class="block lg:flex font-inter">
                        {{-- home --}}
                        <li class="group">
                            <a href="/" class="flex justify-center lg:justify-start text-base text-dark group-hover:text-ocean dark:text-white font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Home</a>
                        </li>
                        {{-- about --}}
                        <li class="group">
                            <a href="/news" class="flex justify-center lg:justify-start text-base text-dark group-hover:text-ocean dark:text-white font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">News</a>
                        </li>
                        {{-- gallery --}}
                        <li class="group">
                            <a href="/galleries" class="flex justify-center lg:justify-start text-base text-dark group-hover:text-ocean dark:text-white font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Gallery</a>
                        </li>
                        {{-- category --}}
                        <li class="group">
                            <a href="/categories" class="flex justify-center lg:justify-start text-base text-dark group-hover:text-ocean dark:text-white font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Category</a>
                        </li>
                        {{-- admin --}}
                        @auth
                        {{-- dashboard --}}
                        <li class="group">
                            <a href="/dashboard/galleries" class="flex justify-center lg:justify-start text-base text-login hover:text-green-700 dark:text-white font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Dashboard</a>
                        </li>
                        <hr class="hidden lg:block">
                        {{-- logout --}}
                        <li class="group">
                            <form action="/logout" method="post" class="flex justify-center lg:justify-start">
                                @csrf
                                <button type="submit" class="w-full text-base text-red-500 hover:text-red-700 font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Logout</button>
                            </form>
                        </li>
                        @else
                        {{-- login --}}
                        <li class="group">
                            <a href="/login" class="flex justify-center lg:justify-start text-base text-login hover:text-green-700 font-medium border-b-2 border-secondary/30 lg:border-none mx-8 py-3 lg:py-2">Login Admin</a>
                        </li>
                        @endauth
                        {{-- dark mode --}}
                        <li class="flex items-center my-6 lg:my-0 pl-0 lg:pl-8">
                            <div class="flex items-center mx-auto">
                                {{-- light mode --}}
                                <span class="text-sm text-slate-500 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                </span>
                                {{-- toggle --}}
                                <input type="checkbox" class="hidden" id="dark-toggle" />
                                <label for="dark-toggle">
                                    <div class="h-5 w-9 bg-slate-500 flex items-center cursor-pointer rounded-full p-1">
                                        <div class="toggle-circle h-4 w-4 bg-white rounded-full transition duration-300 ease-in-out"></div>
                                    </div>
                                </label>
                                {{-- dark mode --}}
                                <span class="text-sm text-slate-500 ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>