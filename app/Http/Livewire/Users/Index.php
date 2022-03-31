<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\UrlWindow;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function getUsersProperty(): LengthAwarePaginator
    {
        return User::paginate(10);
    }

    public function render()
    {
        return view('livewire.users.index');
    }

    public function delete(int $user): void
    {
        User::findOrFail($user)->delete();
    }
    
    public function elements(): array
    {
        $window = UrlWindow::make($this->users);

        return array_filter([
            $window['first'],
            is_array($window['slider']) ? '...' : null,
            $window['slider'],
            is_array($window['last']) ? '...' : null,
            $window['last'],
        ]);
    }

    public function openModal(string $component, $data = []): void
    {
        $this->emit('modal.open', array_merge(['component' => $component], $data));
    }
}
