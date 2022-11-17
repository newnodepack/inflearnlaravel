<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Subside extends Component
{
    public $accounts;

    public function mount()
    {
        $this->accounts = User::all();
    }
    public function render()
    {
        return view('livewire.subside');
    }
}
