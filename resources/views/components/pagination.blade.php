@props(['paginator'])

<div class="flex items-center justify-between px-4 py-3 text-xs font-semibold border-t rounded-b-lg bg-gray-50 border-gray-300 text-gray-500 uppercase dark:bg-zinc-800 dark:border-zinc-700 dark:text-zinc-400">
    <span>Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }}</span>
    <nav>
        <ul class="flex items-center justify-between py-1">
            <li>
                <button class="px-3" {{ $paginator->onFirstPage() ? 'disabled' : '' }}>
                    <x-heroicon-s-chevron-left class="h-4 w-4" />
                </button>
            </li>
            <li>
                <button class="px-3" {{ $paginator->onLastPage() ? 'disabled' : '' }}>
                    <x-heroicon-s-chevron-right class="h-4 w-4" />
                </button>
            </li>
        </ul>
    </nav>
</div>
