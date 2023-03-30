<?php

use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\CatalogoColectorController;
use App\Http\Controllers\FormaPagoController;
use App\Http\Controllers\ModuloPagosController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\TipoPerfilController;
use App\Http\Controllers\TipoUsuarioController;
use App\Models\FormaPago;
use App\Models\TipoPago;
use App\Models\Tipoperfil;
use App\Models\Tipousuario;
use Illuminate\Support\Facades\Route;

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
    return view('menu');
});

Route::get('/catalogos', function () {
    return view('catalogos');
});

Route::get('/pagos', function () {
    return view('pagos');
});
route::resource('agencias', AgenciaController::class);
route::resource('tipousuarios',TipoUsuarioController::class);
route::resource('tipoperfils', TipoPerfilController::class);
route::resource('formapagos',FormaPagoController::class);
route::resource('tipopagos', TipoPagoController::class);
route::resource('catalogocolectores', CatalogoColectorController::class);
route::resource('modulopagos', ModuloPagosController::class);
