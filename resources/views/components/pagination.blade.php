@props(['paginator', 'elements'])

<div class="flex flex-col md:flex-row md:items-center md:justify-between px-4 py-3 text-xs font-semibold border-t rounded-b-lg bg-gray-50 border-gray-300 text-gray-500 uppercase dark:bg-zinc-800 dark:border-zinc-700 dark:text-zinc-400">
    <span>Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }}</span>
    <nav class="mt-2 md:m-0">
        <ul class="flex items-center justify-between py-1">
            <li>
                <button
                    class="px-3 py-1 rounded-md rounded-l-lg"
                    wire:click="previousPage"
                    wire:loading.attr="disabled"
                    {{ $paginator->onFirstPage() ? 'disabled' : '' }}
                >
                    <x-heroicon-s-chevron-left class="h-4 w-4" />
                </button>
            </li>
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-3 py-1">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            @if ($page == $paginator->currentPage())
                                <button
                                    class="px-3 py-1 rounded-md text-white bg-orange-600 border-orange-600"
                                    wire:click="gotoPage({{ $page }})"
                                    wire:loading.attr="disabled"
                                    disabled
                                >
                                    {{ $page }}
                                </button>
                            @else
                                <button
                                    class="px-3 py-1 rounded-md"
                                    wire:click="gotoPage({{ $page }})"
                                    wire:loading.attr="disabled"
                                >
                                    {{ $page }}
                                </button>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach
            <li>
                <button
                    class="px-3 py-1 rounded-md rounded-r-lg"
                    wire:click="nextPage"
                    wire:loading.attr="disabled"
                    {{ $paginator->onLastPage() ? 'disabled' : '' }}
                >
                    <x-heroicon-s-chevron-right class="h-4 w-4" />
                </button>
            </li>
        </ul>
    </nav>
</div>
