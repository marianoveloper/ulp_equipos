<?php

namespace App\Livewire\Pedidos;

use App\Models\User;
use App\Models\Equipo;
use Livewire\Component;
use App\Models\EquipoUser;

class ShowIndex extends Component
{

    public $id;

    public function mount($id)
    {
      
        $this->id = $id;
    }
    public function render()
    {
        
        $prueba=EquipoUser::whereDate('fecha_salida',now()->format('Y-m-d'))->get();
        $usuarios= User::with('equipos')->find($this->id);
        return view('livewire.pedidos.show-index',compact('usuarios'));
    }

    public function status($id){

        $mat=EquipoUser::find($id);
   
   
           if($mat->status=="Pedido"){
               $mat->status="Prestado";               
                $mat->save();
           }elseif($mat->status=="Prestado"){
               $mat->status="Devuelto";
               $mat->fecha_devolucion=now()->format('Y-m-d');
               $mat->save();

               $this->buscarEquipo($mat);
               $this->buscarUser($mat);

           }elseif($mat->status=="Devuelto"){
            $mat->status="Pedido";
            $mat->fecha_devolucion=null;
            $mat->save();
            $this->buscarEquipo($mat);
            $this->buscarUser($mat);

        }
           
   
     
   
   
       }

       //para que este o no disponible el equipo
   
public function buscarEquipo(EquipoUser $mat){

    if($mat->status=="Pedido"){
        $equipo=Equipo::find($mat->equipo_id);
        $equipo->update([
            'status'=>'2'
        ]);
    }elseif($mat->status=="Devuelto"){
        $equipo=Equipo::find($mat->equipo_id);
        $equipo->update([
            'status'=>'1'
        ]);
    }
  
}
//busca si el usuario tiene pedidos pendientes

       public function buscarUser(EquipoUser $mat){
        $this->user=User::find($mat->user_id);
        if($mat->status=="Pedido"){
            
            $this->user->update([
                'status'=>'2'
            ]);
        
        }elseif($mat->status=="Devuelto"){    
           
        $this->cont=0;
           $mat->each(function($mat){
               if($mat->user_id==$this->user->id && $mat->status=="Prestado" or $mat->status=="Pedido"){
                 $this->cont++;
               }
            });
   
   
            if($this->cont==0){
               //$user=User::find($mat->user_id);
               $this->user->update([
                   'status'=>'1'
               ]);
   
   
              }
            //  dd($this->cont);
        }
    }
       
}
