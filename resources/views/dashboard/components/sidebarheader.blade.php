<div class="flex items-center justify-between flex-shrink-0 text-white fontInter bg-slate-800 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
    {{-- admin name --}}
    <span class="text-xl capitalize font-semibold leading-8 whitespace-nowrap p-2 ">
        <span :class="{'lg:hidden': !isSidebarOpen}">{{ auth()->user()->name }}</span>
    </span>
    {{-- tombol close sidebar menu mobile --}}
    <button @click="toggleSidbarMenu()" class="lg:hidden rounded-md p-2">
        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>