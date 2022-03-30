<x-page>
    <x-page-heading title="Users" />
    
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
                    <td class="px-4 py-3 whitespace-nowrap">{{ $user->role->name }}</td>
                </tr>
            @endforeach
        </x-table>
        <x-pagination :paginator="$this->users" :elements="$this->elements()" />
    </x-card>
</x-page>
