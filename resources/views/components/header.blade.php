<header class="bg-white text-gray-500 py-4 px-6 z-10 shadow dark:bg-zinc-800 dark:text-zinc-400">
    <div class="container mx-auto flex justify-between items-center lg:justify-end">
        <button @click="sidebarOpen = ! sidebarOpen" class="lg:hidden hover:text-gray-800 dark:hover:text-zinc-200">
            <x-heroicon-o-menu class="w-6 h-6"/>
        </button>

        <ul class="w-20 flex justify-between items-center">
            <li x-cloak class="relative w-6 h-6">
                <button @click="toggleThemeMenu()" class="hover:text-gray-800 dark:hover:text-zinc-200">
                    <x-heroicon-o-moon x-show="themeColors == 'dark'" class="w-full h-full" />
                    <x-heroicon-o-sun x-show="themeColors == 'light'" class="w-full h-full" />
                </button>
                <x-dropdown-menu x-show="themeMenuOpen" @click.outside="themeMenuOpen = false">
                    <x-dropdown-menu-item icon="desktop-computer" text="System" @click="setTheme('system')" ::class="{ 'bg-gray-100 text-gray-800 dark:bg-zinc-800 dark:text-zinc-100': theme == 'system' }" />
                    <x-dropdown-menu-item icon="sun" text="Light" @click="setTheme('light')" ::class="{ 'bg-gray-100 text-gray-800 dark:bg-zinc-800 dark:text-zinc-100': theme == 'light' }" />
                    <x-dropdown-menu-item icon="moon" text="Dark" @click="setTheme('dark')" ::class="{ 'bg-gray-100 text-gray-800 dark:bg-zinc-800 dark:text-zinc-100': theme == 'dark' }" />
                </x-dropdown-menu>
            </li>
            <li class="relative">
                <button @click="toggleProfileMenu()" class="w-8 h-8 bg-gray-400 text-white rounded dark:bg-zinc-600">{{ auth()->user()->initials }}</button>
                <x-dropdown-menu x-cloak x-show="profileMenuOpen" @click.outside="profileMenuOpen = false" class="mt-2">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center w-full px-2 py-1 font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-zinc-800 dark:hover:text-zinc-100">
                                <x-heroicon-o-logout class="w-4 h-4" />
                                <span class="ml-4">Log out</span>
                            </button>
                        </form>
                    </li>
                </x-dropdown-menu>
            </li>
        </ul>
    </div>
</header>
