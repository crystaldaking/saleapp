<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class ShowWallets extends Component
{
    public User $user;
    public Collection $wallets;
    public float $totalBalance = 0;

    public function render()
    {
        $this->wallets = $this->user->wallets;
        $this->totalBalance = $this->user->getBalance();
        return view('livewire.show-wallets');
    }
}
