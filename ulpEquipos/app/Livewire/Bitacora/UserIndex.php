<?php

namespace App\Livewire\Bitacora;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users=User::all();

        return view('livewire.bitacora.user-index',compact('users'));
    }
}
