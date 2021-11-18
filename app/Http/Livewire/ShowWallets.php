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
        $this->user->wallets()->each(function ($wallet) {
            $this->totalBalance += $wallet->pivot->balance;
        });
        return view('livewire.show-wallets');
    }
}
