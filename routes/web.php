<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Usuarios;
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
    return view('welcome');
});

Route::view('/usuarios', 'usuarios')->name('usuarios');

Route::view('/logistica', 'logistica')->name('logistica');
Route::view('/operadores', 'operadores')->name('operadores');
Route::view('/supervision', 'supervision')->name('supervision');
Route::view('/bascula', 'bascula')->name('bascula');
Route::view('/bodega', 'bodega')->name('bodega');

//Route::get('/usuarios', Usuarios::class)->name('usuarios');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
