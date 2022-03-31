<div> 
    <h1 class="font-semibold">Delete user <strong>{{ $user->name }}</strong>?</h1>

    <footer class="mt-6 flex items-center justify-end">
        <button wire:click="close()" class="text-gray-400 hover:text-gray-700 dark:text-zinc-400 dark:hover:text-zinc-200">No</button>
        <button wire:click="submit()" class="text-gray-400 hover:text-gray-700 dark:text-zinc-400 dark:hover:text-zinc-200">Yes</button>
    </footer>
</div>
