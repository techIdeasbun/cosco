<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\admin\ActividadeControler;
use App\Http\Controllers\admin\BasculaController;
use App\Http\Controllers\admin\BodegaController;
use App\Http\Controllers\admin\CiudadeController;
use App\Http\Controllers\admin\OperadoreController;
use App\Http\Controllers\admin\ProductoController;
use App\Http\Controllers\admin\SupervisioneController;

use App\Http\Controllers\admin\TransporteController;
use App\Http\Controllers\admin\AccidenteController;
use App\Http\Controllers\admin\DisponibilidadController;
use App\Http\Controllers\admin\EntregaController;

use App\Http\Controllers\Admin\PedidoController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('actividades', ActividadeControler::class)->names('admin.actividades');
Route::resource('basculas', BasculaController::class)->names('admin.basculas');
Route::resource('bodegas', BodegaController::class)->names('admin.bodegas');
Route::resource('ciudades', CiudadeController::class)->names('admin.ciudades');
Route::resource('operadores', OperadoreController::class)->names('admin.operadores');
Route::resource('productos', ProductoController::class)->names('admin.productos');
Route::resource('supervisiones', SupervisioneController::class)->names('admin.supervisiones');

Route::resource('transportes', TransporteController::class)->names('admin.transportes');
Route::resource('accidentes', AccidenteController::class)->names('admin.accidentes');
Route::resource('disponibilidades', DisponibilidadController::class)->names('admin.disponibilidades');
Route::resource('entregas', EntregaController::class)->names('admin.entregas');

Route::resource('pedidos', PedidoController::class)->names('admin.pedidos');
