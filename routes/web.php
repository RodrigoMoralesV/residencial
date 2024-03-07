<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\EventoController;
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

//Route::get('/', function () {
//    return view('residentes/index');
//});

// Route::get('/layout', function() {
//     return view('layout');
// });

Route::get('/bloques', function() {
    return view('index');
});

Route::get('/eventos', function() {
    return view('index');
});

Route::get('/paquetes', function() {
    return view('index');
});

Route::get('/permisos', function() {
    return view('index');
});

Route::get('/reservas', function() {
    return view('index');
});

Route::get('/residentes', function() {
    return view('index');
});

Route::get('/tipos_viviendas', function() {
    return view('index');
});

Route::get('/usuarios', function() {
    return view('index');
});

Route::get('/viviendas', function() {
    return view('index');
});

Route::get('/zonas_comunes', function() {
    return view('index');
});

Route::get('/zonas_comunes', function() {
    return view('index');
});

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
