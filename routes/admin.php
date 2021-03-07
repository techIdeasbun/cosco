<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\admin\ActividadeControler;

/* Route::get('', function(){
    return "Hola administrador";
}); */

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('actividades', ActividadeControler::class)->names('admin.actividades');

