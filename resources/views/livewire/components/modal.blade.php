<div
    x-cloak
    x-data="{ open: @entangle('open') }"
    x-show="open"
    :class="{ 'dark': themeColors == 'dark' }"
    class="fixed inset-0 z-30 bg-black bg-opacity-50 flex items-center justify-center"
>
    <article @click.outside="$wire.close()" class="w-full max-w-xl px-6 py-4 m-4 overflow-hidden bg-white rounded-lg dark:bg-zinc-800">
        @if ($component)
            @livewire($component, $data, key($key))
        @endif
    </article>
</div>
