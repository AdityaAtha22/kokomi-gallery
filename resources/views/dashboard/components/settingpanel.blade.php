<div x-show="isSettingsPanelOpen" @click.away="isSettingsPanelOpen = false" x-transition:enter="transition transform duration-300" x-transition:enter-start="translate-x-full opacity-30 ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="translate-x-full opacity-0 ease-in" class="w-80 fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
    <div class="flex items-center justify-between flex-shrink-0 p-2">
        <h6 class="text-lg p-2">Settings</h6>
        <button @click="isSettingsPanelOpen = false" class="rounded-md focus:outline-none focus:ring p-2">
            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
        <span>Settings Content</span>
    </div>
</div>