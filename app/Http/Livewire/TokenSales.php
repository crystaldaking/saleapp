<?php

namespace App\Http\Livewire;

use App\Models\Token;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TokenSales extends Component
{
    public User $user;
    public float $totalBalance = 0;
    public Collection $wallets;
    public Collection $tokens;
    public float $usdValue = 0;

    public function mount()
    {
        $this->user->wallets()->each(function ($wallet) {
            $this->totalBalance += $wallet->pivot->balance;
        });
    }
    
    public function render()
    {
        $this->wallets = $this->user->wallets;
        $this->tokens = Token::where('end_date','>',now())->get();
        return view('livewire.token-sales');
    }

    public function confirm()
    {
        $this->totalBalance -= $this->usdValue;
    }
}
