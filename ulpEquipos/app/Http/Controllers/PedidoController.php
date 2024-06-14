<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
   public function index()
   {
     return view('pedidos.index');
   }

   public function show($id)
   {
     return view('pedidos.show', compact('id'));
   }

   
}
