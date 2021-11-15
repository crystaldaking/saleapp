<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class ShowWallets extends Component
{
    public User $user;
    public Collection $wallets;
    public float $totalBalance;

    public function render()
    {
        $this->wallets = $this->user->wallets;
        return view('livewire.show-wallets');
    }
}
