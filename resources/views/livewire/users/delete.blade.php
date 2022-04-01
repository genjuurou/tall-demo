<div> 
    <h1 class="text-lg font-semibold">Delete user <strong>{{ $user->name }}</strong>?</h1>

    <footer class="mt-6 flex items-center justify-end gap-x-6 px-6 py-3 -mx-6 -mb-4 bg-gray-50 dark:bg-zinc-800">
        <button wire:click="close()" class="w-20 px-4 py-2 text-sm font-medium border border-gray-300 rounded-lg text-gray-400 hover:text-gray-700 hover:border-gray-500 dark:text-zinc-400 dark:border-zinc-200 dark:hover:border-zinc-500">No</button>
        <button wire:click="submit()" class="w-20 px-4 py-2 text-sm font-medium bg-orange-600 border border-transparent rounded-lg text-white hover:bg-orange-700">Yes</button>
    </footer>
</div>
