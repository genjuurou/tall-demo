<x-page>
    <x-page-heading :title="$user->name" />
    
    <x-card>
        <dl class="divide-y divide-gray-300 text-gray-700 divide-gray-700 dark:bg-zinc-800 dark:text-zinc-400 dark:divide-zinc-700">
            <div class="grid grid-cols-12 px-4 py-3">
                <dt class="col-span-3 font-semibold">Name</dt>
                <dd class="col-span-9">{{ $user->name }}</dd>
            </div>
            <div class="grid grid-cols-12 px-4 py-3">
                <dt class="col-span-3 font-semibold">Email</dt>
                <dd class="col-span-9">{{ $user->email }}</dd>
            </div>
            <div class="grid grid-cols-12 px-4 py-3">
                <dt class="col-span-3 font-semibold">Role</dt>
                <dd class="col-span-9">{{ $user->role->name }}</dd>
            </div>
        </dl>
    </x-card>
</x-page>
