<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequesterController;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\UsinaController;
use App\Http\Controllers\VehicleController;


Route::middleware('auth')->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/meu-perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/meu-perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rota welcome
    Route::get('/', [UsinaController::class, 'welcome'])->name('welcome');

    // rota requests


    // rota requesters


    // rota materials


    // rota driver
    Route::resource('drivers', DriverController::class);

    // rotas vehicle
    Route::resource('vehicles', VehicleController::class);

});

require __DIR__.'/auth.php';
