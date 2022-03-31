<div
    x-cloak
    x-data="{ open: @entangle('open') }"
    x-show="open"
    :class="{ 'dark': themeColors == 'dark' }"
    class="fixed inset-0 z-30 bg-black bg-opacity-50 flex items-center justify-center"
>
    <article @click.outside="$wire.close()" class="w-full max-w-xl px-6 py-4 m-4 overflow-hidden rounded-lg text-sm bg-white text-gray-700 dark:text-gray-400 dark:bg-zinc-800">
        @if ($component)    
            <header class="mb-4 flex justify-end">
                <button wire:click="close()" class="text-gray-400 hover:text-gray-700 dark:text-zinc-400 dark:hover:text-zinc-200">
                    <x-heroicon-o-x class="w-5 h-5" />
                </button>
            </header>
        
            @livewire($component, $data, key($key))
        @endif
    </article>
</div>
