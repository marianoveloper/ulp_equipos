<?php

namespace App\Livewire\Equipos;

use App\Models\User;
use App\Models\Equipo;
use Livewire\Component;
use App\Models\EquipoUser;


class DevolucionEquiposIndex extends Component
{

    public $cont;

    public function render()
    {
        $this->us=auth()->user()->id;

        //$equipos = Equipo::with('users')->get();
        $usuarios= User::with('equipos')->find($this->us);
       // dd($usuarios->equipos);

        return view('livewire.equipos.devolucion-equipos-index',compact('usuarios'));
    }

    public function status($id){

     $mat=EquipoUser::find($id);


        if($mat->status=="Prestado"){
            $mat->status="Devuelto";
            $mat->fecha_devolucion=now()->format('Y-m-d');
             $mat->save();
        }elseif($mat->status=="Devuelto"){
            $mat->status="Prestado";
            $mat->fecha_devolucion=null;
            $mat->save();
        }

        $equipo=Equipo::find($mat->equipo_id);

        $equipo->update([
            'status'=>'1'
        ]);


        $this->buscarUser($mat);

        session()->flash('message','¡Actualización exitosa!');


    }

    public function buscarUser(EquipoUser $mat){
        $this->cont=0;
        $mat->each(function($mat){
            if($mat->user_id==auth()->user()->id && $mat->status=="Prestado"){
              $this->cont++;
            }
         });


         if($this->cont==0){
            $user=User::find($mat->user_id);
            $user->update([
                'status'=>'1'
            ]);


           }
         //  dd($this->cont);


    }
}
