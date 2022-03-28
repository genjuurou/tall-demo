@props(['icon', 'text', 'active' => false])

@php
    $colors = $active ? 'bg-gray-100 text-gray-800 dark:bg-zinc-800 dark:text-zinc-100' : '';
@endphp

<li {{ $attributes->merge(['class' => 'rounded-md']) }}>
    <button class="inline-flex items-center w-full px-2 py-1 font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-zinc-800 dark:hover:text-zinc-100 {{ $colors }}">
        <x-dynamic-component component="{{ 'heroicon-o-'.$icon }}" class="w-4 h-4" />
        <span class="ml-4">{{ $text }}</span>
    </button>
</li>
