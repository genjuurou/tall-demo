<x-page>
    <x-page-heading title="Users" />
    
    <button wire:click="openModal('users.create')" class="px-2 py-2 font-medium dark:text-zinc-400">Create</button>
    <x-card>
        <x-table :columns="['User', 'Role', 'Action']">
            @foreach($this->users as $user)
                <tr>
                    <td class="px-4 py-3">
                        <figure class="flex items-center">
                            <div class="w-8 h-8 mr-3 flex items-center justify-center bg-gray-400 text-white rounded dark:bg-zinc-600">
                                <span class="block">{{ $user->initials }}</span>
                            </div>
                            <figcaption>
                                <span class="block font-semibold">{{ $user->name }}</span>
                                <span class="block text-xs text-gray-600 dark:text-zinc-400">{{ $user->email }}</span>
                            </figcaption>
                        </figure>
                    </td>
                    <td class="px-4 py-3 whitespace-nowrap">{{ $user->role->name }}</td>
                    <td class="px-4 py-3 whitespace-nowrap">
                        <div class="flex items-center space-x-4 text-sm">
                            <a href="{{ route('users.show', $user) }}" class="px-2 py-2 font-medium dark:text-zinc-400">
                                <x-heroicon-o-eye class="w-5 h-5" />
                            </a>
                            <button class="px-2 py-2 font-medium dark:text-zinc-400">
                                <x-heroicon-o-pencil class="w-5 h-5" />
                            </button>
                            <button wire:click="openModal('users.delete', { 'userId': {{ $user->id}} })" class="px-2 py-2 font-medium dark:text-zinc-400">
                                <x-heroicon-o-trash class="w-5 h-5" />
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-table>
        <x-pagination :paginator="$this->users" :elements="$this->elements()" />
    </x-card>
</x-page>
