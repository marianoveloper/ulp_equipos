<?php

namespace App\Livewire\Bitacora;

use App\Models\User;
use App\Models\Equipo;
use Livewire\Component;
use App\Models\EquipoUser;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoIndex extends Component
{
    public function render()
    {
        
        $usuarios= User::where("status",'2')->with('equipos')->get();

          return view('livewire.bitacora.pedido-index',compact('usuarios'));
    }
}
