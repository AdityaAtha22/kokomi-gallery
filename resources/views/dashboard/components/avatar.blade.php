<div class="relative" x-data="{ isOpen: false }">
    {{-- avatar --}}
    <button @click="isOpen = !isOpen" class="bg-slate-800 rounded-full focus:outline-none focus:ring p-1">
        <img class="w-8 h-8 object-cover rounded-full" src="/img/profile-dashboard.png" alt="{{ auth()->user()->name }}" />
    </button>
    {{-- radar active --}}
    <div class="absolute right-0 bottom-3 bg-green-400 rounded-full animate-ping p-1"></div>
    <div class="absolute right-0 bottom-3 bg-green-400 border border-white rounded-full p-1"></div>
    {{-- dropdown --}}
    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="min-w-max absolute z-50 bg-white transform -translate-x-full rounded-md shadow-lg mt-3">
        {{-- admin data --}}
        <div class="flex flex-col font-medium fontPoppins border-b space-y-1 p-4">
            <span class="text-gray-800">{{ auth()->user()->name }}</span>
            <span class="text-sm text-secondary">{{ auth()->user()->email }}</span>
        </div>
        <div class="flex items-center justify-center p-4 text-white fontPoppins underline border-t rounded-b-md bg-red-500 hover:bg-red-600">
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>