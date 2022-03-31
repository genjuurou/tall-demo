<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Delete extends Component
{
    public User $user;

    public function mount($userId)
    {
        $this->user = User::findOrFail($userId);
    }

    public function close(): void
    {
        $this->emitUp('modal.close');
    }

    public function submit(): void
    {
        $this->user->delete();
        $this->close();
    }

    public function render()
    {
        return view('livewire.users.delete');
    }
}
