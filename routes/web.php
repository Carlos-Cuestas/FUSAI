<?php

use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\CatalogoColectorController;
use App\Http\Controllers\FormaPagoController;
use App\Http\Controllers\ModuloPagosController;
use App\Http\Controllers\RegusermovController;
use App\Http\Controllers\TipocolectorController;
use App\Http\Controllers\TipomovimientoController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\TipoPerfilController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UserController;
use App\Models\FormaPago;
use App\Models\RegUserMov;
use App\Models\TipoPago;
use App\Models\Tipoperfil;
use App\Models\Tipousuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
    return view('login');
})->middleware('guest')->name('login');

Route::post('/login', function() {
    if(! Auth::attempt(request()->only('email', 'password'), request()->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }

    return redirect('/menu');
})->middleware('guest')->name('session.login');

Route::post('logout', function() {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/')->with('success', 'Logged out successfully');
})->middleware('auth')->name('session.logout');

Route::get('/menu', function(){
    return view('menu');
})->middleware('auth')->name('menu');

Route::get('/catalogos', function () {
    return view('catalogos');
})->middleware('auth');

Route::get('/recibo', function () {
    return view('recibo');
})->middleware('auth');

Route::get('/pagos', function () {
    return view('pagos');
})->middleware('auth');

route::resource('agencias', AgenciaController::class);
route::resource('tipousuarios',TipoUsuarioController::class);
route::resource('tipoperfils', TipoPerfilController::class);
route::resource('formapagos',FormaPagoController::class);
route::resource('tipopagos', TipoPagoController::class);
route::resource('catalogocolectores', CatalogoColectorController::class);
route::resource('modulopagos', ModuloPagosController::class);
route::resource('users', UserController::class);
route::resource('tipomovimientos', TipomovimientoController::class);
route::resource('tipocolectores', TipocolectorController::class);
route::resource('regs', RegusermovController::class);
