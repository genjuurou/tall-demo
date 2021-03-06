@props(['columns'])

<div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap text-left bg-white text-gray-700 dark:bg-zinc-800 dark:text-zinc-400">
        <thead class="text-xs font-semibold border-b bg-gray-50 border-gray-300 text-gray-500 uppercase dark:bg-zinc-800 dark:border-zinc-700 dark:text-zinc-400">
            <tr>
                @foreach($columns as $column)
                    <th class="px-4 py-3 rounded-t-lg">{{ $column }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="divide-y dark:divide-zinc-700">
            {{ $slot }}
        </tbody>
    </table>
</div>
