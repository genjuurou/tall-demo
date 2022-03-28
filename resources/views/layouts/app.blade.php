<x-layout>
    <div class="h-screen flex bg-gray-50 dark:bg-zinc-900">
        <x-sidebar />

        <div class="flex-1 flex flex-col">
            <x-header />

            <main class="h-full overflow-y-auto text-gray-700 dark:text-zinc-300">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layout>
