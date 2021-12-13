<?php

namespace App\Http\Livewire;

use App\Models\Order;
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
    public $selectedTokenId;
    public Collection $orders;

    public function mount()
    {
        $this->wallets = $this->user->wallets;
        $this->selectedTokenId = 0;
        $this->tokens = Token::where('end_date', '>', now())
            ->where('start_date', '<', now())->get();
        $this->user->wallets()->each(function ($wallet) {
            $this->totalBalance += $wallet->pivot->balance;
        });
    }

    public function render()
    {
        $this->orders = Order::where('user_id',$this->user->id)->get();
        return view('livewire.token-sales');
    }

    public function confirm()
    {
        //TODO:: fix this
        $order = new Order();
        $order->order_time = now();
        $order->price = $this->usdValue;
        $order->token_id = $this->selectedTokenId;
        $order->user_id = $this->user->id;
        $order->status = 0; //Default
        $order->save();

        $this->totalBalance -= $this->usdValue;
        $wallet = $this->user->wallets()->first();
        //$this->user->wallets()->sync($wallet, ['balance' => $this->totalBalance]);
        $this->user->wallets()->updateExistingPivot($wallet,['balance' => $this->totalBalance]);
    }

}
