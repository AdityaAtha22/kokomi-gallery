<div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
    <div @click.away="isSearchBoxOpen = false" class="absolute inset-x-0 flex items-center justify-between text-white bg-slate-800 shadow-md p-2">
        <div class="flex items-center flex-1 space-x-2 px-2">
            {{-- search icon --}}
            <span>
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            {{-- input cari --}}
            <input type="text" placeholder="Cari data" class="w-full text-gray-600 fontPoppins focus:bg-gray-100 rounded-md focus:outline-none px-4 py-3" />
        </div>
        {{-- close button --}}
        <button @click="isSearchBoxOpen = false" class="flex-shrink-0 rounded-md p-4">
            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>