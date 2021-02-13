<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/novedades', function () {
    return view('novedades');
})->name('novedades');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
