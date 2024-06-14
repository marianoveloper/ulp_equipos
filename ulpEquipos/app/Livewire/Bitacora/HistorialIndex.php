<?php

namespace App\Livewire\Bitacora;

use App\Models\User;
use Livewire\Component;

class HistorialIndex extends Component
{
    public function render()
    {
        $bitacoras= User::with('equipos')->get();

        return view('livewire.bitacora.historial-index',compact('bitacoras'));
    }
}
