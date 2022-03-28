<aside class="hidden w-64 shrink-0 z-20 bg-white md:block dark:bg-zinc-800">
    <div class="mt-4">
        <x-logo class="text-2xl ml-6" />
        <nav class="mt-4 text-sm font-semibold text-gray-500 dark:text-zinc-400">
            <ul>
                <li>
                    <a href="#" class="block flex items-center px-4 py-3 mx-2 rounded-md hover:text-gray-800 hover:bg-gray-100 dark:hover:text-zinc-200 dark:hover:bg-zinc-700">
                        <x-heroicon-o-briefcase class="w-5 h-5"/>    
                        
                        <span class="ml-4">Clients</span>
                    </a>
                </li>
                <li class="relative">
                    <span class="absolute inset-y-0 w-1 bg-orange-600 rounded-tr rounded-br"></span>

                    <a href="{{ route('users.index') }}" class="block flex items-center px-4 py-3 mx-2 rounded-md text-gray-800 hover:bg-gray-100 dark:text-zinc-200 dark:hover:bg-zinc-700">
                        <x-heroicon-o-users class="w-5 h-5"/>    
                        
                        <span class="ml-4">Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div x-cloak x-show="sidebarOpen" class="fixed inset-0 z-10 bg-black/50"></div>

<aside
    x-cloak
    x-show="sidebarOpen"
    @click.outside="sidebarOpen = false"
    class="fixed inset-0 mt-16 z-20 w-64 bg-white dark:bg-zinc-800"
>
    <div class="mt-4">
        <x-logo class="text-2xl ml-6" />
        <nav class="mt-4 text-sm font-semibold text-gray-500 dark:text-zinc-400">
            <ul>
                <li>
                    <a href="#" class="block flex items-center px-4 py-3 mx-2 rounded-md hover:text-gray-800 hover:bg-gray-100 dark:hover:text-zinc-200 dark:hover:bg-zinc-700">
                        <x-heroicon-o-briefcase class="w-5 h-5"/>    
                        
                        <span class="ml-4">Clients</span>
                    </a>
                </li>
                <li class="relative">
                    <span class="absolute inset-y-0 w-1 bg-orange-600 rounded-tr rounded-br"></span>

                    <a href="{{ route('users.index') }}" class="block flex items-center px-4 py-3 mx-2 rounded-md text-gray-800 hover:bg-gray-100 dark:text-zinc-200 dark:hover:bg-zinc-700">
                        <x-heroicon-o-users class="w-5 h-5"/>    
                        
                        <span class="ml-4">Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
