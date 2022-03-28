<x-page>
    <x-page-heading title="Users" />
    
    <x-card>
        <x-table :columns="['User', 'Email']">
            @foreach($this->users as $user)
                <td class="px-4 py-3 whitespace-nowrap">{{ $user->name }}</td>
                <td class="px-4 py-3 whitespace-nowrap">{{ $user->email }}</td>
            @endforeach
        </x-table>
        <x-pagination :paginator="$this->users" />
    </x-card>
</x-page>
