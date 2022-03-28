@props(['type' => 'info', 'message'])

@php
    $colors = [
        'danger' => 'bg-red-100 text-red-700 dark:bg-red-700 dark:text-red-100',
    ];
@endphp

<div class="w-full p-3 rounded-lg font-semibold {{ $colors[$type] }}">
    <p>{{ $message }}</p>
</div>
