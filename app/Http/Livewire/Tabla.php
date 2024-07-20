<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Tabla extends Component
{
    public function render()
    {
        return view('livewire.tabla', [
            'users' => User::all(),
        ]);
    }
}
