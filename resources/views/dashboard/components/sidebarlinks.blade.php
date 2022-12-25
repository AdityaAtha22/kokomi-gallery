<nav class="flex-1 overflow-hidden hover:overflow-y-auto text-white fontInter bg-slate-800">
    <ul class="overflow-hidden p-2">
        {{-- kokomi gallery --}}
        <li>
            <a href="/galleries" class="flex items-center space-x-2 hover:text-gray-400 hover:bg-gray-100 rounded-md p-2" :class="{'justify-center': !isSidebarOpen}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house w-6 h-6 text-gray-400" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                    </svg>
                </span>
                <span :class="{ 'lg:hidden': !isSidebarOpen }" class="font-medium">Kokomi Gallery</span>
            </a>
        </li>
        {{-- my galleries --}}
        <li>
            <a href="/dashboard/galleries" class="flex items-center space-x-2 hover:text-gray-400 hover:bg-gray-100 rounded-md p-2" :class="{'justify-center': !isSidebarOpen}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-bar-graph w-6 h-6 text-gray-400" viewBox="0 0 16 16">
                        <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z" />
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                    </svg>
                </span>
                <span :class="{ 'lg:hidden': !isSidebarOpen }" class="font-medium">My Galleries</span>
            </a>
        </li>
    </ul>
</nav>