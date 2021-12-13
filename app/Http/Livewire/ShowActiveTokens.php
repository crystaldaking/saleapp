<?php

namespace App\Http\Livewire;

use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowActiveTokens extends Component
{
    public Collection $tokens;

    public function mount()
    {
        $this->tokens = Token::where('start_date', '<', now())->get();
    }

    public function render()
    {
        return view('livewire.show-active-tokens');
    }
}
