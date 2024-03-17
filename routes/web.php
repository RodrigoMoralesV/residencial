<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\TiposViviendaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ViviendaController;
use App\Http\Controllers\ZonaComunController;

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

Route::get('/', function () {
    if(Auth::check()){
        return view('home');
    }
    return view('login');
});

Route::get('/login', function() {
    if(Auth::check()){
        return view('home');
    }
    return view('login');
})->name('login');

Route::get('/logout', function() {
    Auth::logout();

    return redirect('login');
});

Route::get('/register', function() {
    if(Auth::check()){
        return view('home');
    }
    return view('register');
});

Route::post('/register', [LoginController::class, 'register']);

Route::post('/check', [LoginController::class, 'check']);

Route::get('/home', function() {
    if(Auth::check()){
        return view('home');
    }
    return redirect('login');
});

Route::middleware(['auth'])->group(function () {
    
    Route::resource('bloques',BloqueController::class);
    
    Route::resource('eventos',EventoController::class);
    
    Route::resource('paquetes',PaqueteController::class);
    
    Route::resource('permisos',PermisoController::class);
    
    Route::resource('reservas',ReservaController::class);
    
    Route::resource('residentes',ResidenteController::class);
    
    Route::resource('tipos_viviendas',TiposViviendaController::class);
    
    Route::resource('usuarios',UsuarioController::class);
    
    Route::resource('viviendas',ViviendaController::class);
    
    Route::resource('zonas_comunes',ZonaComunController::class);
});