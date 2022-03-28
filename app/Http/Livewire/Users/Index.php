<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

class Index extends Component
{
    public function getUsersProperty(): LengthAwarePaginator
    {
        return User::paginate(15);
    }

    public function render()
    {
        return view('livewire.users.index');
    }
}
