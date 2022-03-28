@props(['title'])

<div class="flex justify-between items-center my-6">
    <h1 class="text-2xl font-semibold text-gray-700 dark:text-zinc-200">
        {{ $title }}
    </h1>
    
    {{ $slot }}
</div>
