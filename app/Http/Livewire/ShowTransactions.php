<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowTransactions extends Component
{
    public Collection $orders;
    public User $user;

    public function render()
    {
        $this->orders = $this->user->orders;
        return view('livewire.show-transactions');
    }
}
