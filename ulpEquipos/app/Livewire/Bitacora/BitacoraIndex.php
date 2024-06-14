<?php

namespace App\Livewire\Bitacora;

use App\Models\User;
use App\Models\Equipo;
use Livewire\Component;

class BitacoraIndex extends Component
{
    public function render()
    { 
       // $equipos = Equipo::with('users')->get();
        $bitacoras= User::with('equipos')->get();
        
      // dd($bitacora->equipos);
     
       
        return view('livewire.bitacora.bitacora-index',compact('bitacoras'));
    }
}
