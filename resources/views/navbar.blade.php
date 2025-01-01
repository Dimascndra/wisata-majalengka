<header>
    <nav
        class="bg-gray-50 px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="index.php" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Wisata
                    Majalengka</span>
            </a>
            <div class="flex md:order-2">
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-200 rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-600">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 md:dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-600">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('view.grafik') }}"
                            class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 md:dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-600">Grafik</a>
                    </li>
                    <li>
                        <a href="{{ route('pesanan.create') }}"
                            class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 md:dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-600">Pesan
                            Tiket</a>
                    </li>
                    @if (Auth::check())
                        <li class="relative">
                            <button
                                class="flex items-center py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-blue-600 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 md:dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-600"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                {{ Auth::user()->name }}
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul
                                class="absolute left-0 hidden mt-2 bg-white border border-gray-300 rounded-md shadow-lg dark:bg-gray-700">
                                <li><a href="{{ route('pesanan.index') }}"
                                        class="block px-4 py-2 text-gray-800 hover:bg-blue-600 dark:text-gray-300 dark:hover:bg-gray-600">Daftar
                                        Pesanan ({{ Auth::user()->tikets->count() }})</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit"
                                            class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-blue-600 dark:text-gray-300 dark:hover:bg-gray-600">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}"
                                class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-blue-600 md:p-0 md:dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-600">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
