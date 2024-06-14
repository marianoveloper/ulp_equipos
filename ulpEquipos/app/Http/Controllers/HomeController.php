<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(){
   /* $us=Auth::user()->id;
        $equipos = Equipo::with('users')->get();
        $usuarios= User::with('equipos')->find($us);
       // dd($usuarios->equipos);

        return view('welcome',compact('equipos'));*/
    }

   
}
