<!-- Floating Navbar -->
<header class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-5xl">
    <nav
        class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl px-2 sm:px-5  py-2 flex items-center justify-between shadow-sm">
        <a href="/" class="flex items-center gap-2">
            <div class="w-6 h-6 ">
                <svg class="fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M13.343 2A6 6 0 0 0 21 9.657V21a1 1 0 0 1-1 1H6.5A3.5 3.5 0 0 1 3 18.5V5a3 3 0 0 1 3-3zM6.5 17a1.5 1.5 0 0 0 0 3H19v-3zM18.53.33a.507.507 0 0 1 .94 0l.254.61a4.37 4.37 0 0 0 2.25 2.327l.718.32a.53.53 0 0 1 0 .962l-.76.338a4.36 4.36 0 0 0-2.218 2.25l-.247.566a.506.506 0 0 1-.934 0l-.246-.565a4.36 4.36 0 0 0-2.22-2.251l-.76-.338a.53.53 0 0 1 0-.963l.718-.32A4.37 4.37 0 0 0 18.276.942z" />
                </svg>
            </div>
            <span class="font-medium">LazyRead</span>
        </a>

        <div class="hidden md:flex items-center gap-2">
            <a href="/"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">Home</a>
            <a href="/about"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">About</a>
            <a href="{{ route('artikel.index') }}"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">Article</a>
        </div>

        <button
            class="px-4 py-1.5 bg-black dark:bg-white text-white dark:text-black text-sm  rounded-xl hover:opacity-80 hover:scale-[1.05] active:scale-[0.95] transition">
            Berlangganan
        </button>
    </nav>
</header>
