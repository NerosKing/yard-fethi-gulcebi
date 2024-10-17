<nav class="bg-white border border-gray-200 dark:border-gray-700 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 shadow">
    <div class="container flex flex-wrap items-center mx-auto">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <h1 class="font-medium text-2xl">Fethican Gulcebi</h1>
        </a>

        <!-- Hamburger Icon (mobile) -->
        <div class="ml-auto flex items-center md:hidden">
            <button id="menu-toggle" type="button" class="inline-flex p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <!-- Hamburger icon -->
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Menu -->
        <div class="hidden md:block md:fixed md:right-0 md:top-0 md:h-auto p-6 bg-white dark:bg-gray-800 shadow-lg" id="mobile-menu">
            <ul class="flex flex-col space-y-8 gap-0.5 text-sm font-medium">
                <li>
                    <a href="./index.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
