<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public function openModal(string $component, $data = []): void
    {
        $this->emit('modal.open', array_merge(['component' => $component], $data));
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
