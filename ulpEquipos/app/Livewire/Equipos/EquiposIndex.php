<?php

namespace App\Livewire\Equipos;

use App\Models\User;
use App\Models\Equipo;
use Livewire\Component;
use App\Models\EquipoUser;
use Livewire\WithFileUploads;

class EquiposIndex extends Component
{
   // public $equipos;
    use WithFileUploads;
    public $equipo_id,$user_id,$descripcion;

    public function render()
    {
        $equipos=Equipo::where('status',1)->get();
       // dd($equipos);

        return view('livewire.equipos.equipos-index',compact('equipos'));
    }

    public function guardar(){


        $equipo= new EquipoUser();

        $equipo->equipo_id=$this->equipo_id;
        $equipo->user_id=auth()->user()->id;
        $equipo->descripcion_cobertura=$this->descripcion;

        $equipo->fecha_salida=now()->format('Y-m-d');
        $equipo->save();

        $equiposp=Equipo::find($this->equipo_id);

        $equiposp->update([


            'status'=>'2',

        ]);

        $user=User::find(auth()->user()->id);
        $user->update([

            'status'=>'2',
        ]);


        session()->flash('info','¡Equipo Agregado!');

        $this->limpiarCampos();


    }

    public function limpiarCampos(){

        $this->descripcion="";




    }


}
