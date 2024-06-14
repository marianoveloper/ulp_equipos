<?php

namespace App\Livewire\Bitacora;

use App\Models\Equipo;
use Livewire\Component;

class EquipoIndex extends Component
{
    public $name,$marca,$modelo,$descripcion;

    public function render()
    {
        return view('livewire.bitacora.equipo-index',[
            "equipos"=>Equipo::all(),

            ]);
    }


    public function guardar(){

        $rules=
         $this->validate([
            'name' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'descripcion' => 'required',

        ]);

        $this->validate($rules);

        sleep(2);
        $equipo= new Equipo();

        $equipo->name=$this->name;
        $equipo->marca=$this->marca;
        $equipo->modelo=$this->modelo;
        $equipo->descripcion=$this->descripcion;
        $equipo->fecha_ingreso=now();
        $equipo->save();


        session()->flash('message','info'?
        '¡Actualización exitosa!' : '¡Alta Exitosa!');



     //$this->limpiarCampos();
    }
}
