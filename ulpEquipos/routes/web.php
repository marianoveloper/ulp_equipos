<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\GoogleAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');
/*Route::get('/', HomeController::class)->name('principal');
Route::get('/',function(){
    return view('principal');
});*/

Route::resource('equipos', EquiposController::class)->names('equipos');
Route::resource('devolucion', DevolucionController::class)->names('devolucion');
Route::resource('bitacora', BitacoraController::class)->names('bitacora');
Route::resource('user',UserController::class)->names('user');
Route::resource('equipo', EquipoController::class)->names('equipo');
Route::resource('pedidos',PedidoController::class)->only('index','show')->names('pedidos');


Route::get('/principal', function () {
    return view('principal');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

require __DIR__.'/auth.php';
