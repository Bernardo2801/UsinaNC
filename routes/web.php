<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequesterController;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\UsinaController;
use App\Http\Controllers\VehicleController;
use GuzzleHttp\Psr7\Request;

Route::middleware('auth')->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/meu-perfil', [ProfileController::class, 'update'])->name('profile.update')->middleware('can:access');
    Route::delete('/meu-perfil', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('can:access');

    // rota welcome
    Route::get('/', [UsinaController::class, 'welcome'])->name('welcome');

    // rota requests
    Route::get('/solicitations', [SolicitationController::class, 'index'])->name('solicitations.index');
    Route::get('/solicitations/create', [SolicitationController::class, 'create'])->name('solicitations.create')->middleware('can:access');
    Route::post('/solicitations', [SolicitationController::class, 'store'])->name('solicitations.store')->middleware('can:access');
    Route::get('/solicitations/{id}', [SolicitationController::class, 'show'])->name('solicitations.show');
    Route::get('/solicitations/{id}/edit', [SolicitationController::class, 'edit'])->name('solicitations.edit')->middleware('can:access');
    Route::put('/solicitations/{id}', [SolicitationController::class, 'update'])->name('solicitations.update')->middleware('can:access');
    Route::delete('/solicitations/{id}', [SolicitationController::class, 'destroy'])->name('solicitations.destroy')->middleware('can:access');

    // rota requesters
    Route::get('/requesters', [RequesterController::class, 'index'])->name('requesters.index');
    Route::get('/requesters/create', [RequesterController::class, 'create'])->name('requesters.create')->middleware('can:access');
    Route::post('/requesters', [RequesterController::class, 'store'])->name('requesters.store')->middleware('can:access');
    Route::get('/requesters/{id}', [RequesterController::class, 'show'])->name('requesters.show');
    Route::get('/requesters/{id}/edit', [RequesterController::class, 'edit'])->name('requesters.edit')->middleware('can:access');
    Route::put('/requesters/{id}', [RequesterController::class, 'update'])->name('requesters.update')->middleware('can:access');
    Route::delete('/requesters/{id}', [RequesterController::class, 'destroy'])->name('requesters.destroy')->middleware('can:access');

    // rota materials
    Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
    Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create')->middleware('can:access');
    Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store')->middleware('can:access');
    Route::get('/materials/{id}', [MaterialController::class, 'show'])->name('materials.show');
    Route::get('/materials/{id}/edit', [MaterialController::class, 'edit'])->name('materials.edit')->middleware('can:access');
    Route::put('/materials/{id}', [MaterialController::class, 'update'])->name('materials.update')->middleware('can:access');
    Route::delete('/materials/{id}', [MaterialController::class, 'destroy'])->name('materials.destroy')->middleware('can:access');

    // rota driver
    Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');
    Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create')->middleware('can:access');
    Route::post('/drivers', [DriverController::class, 'store'])->name('drivers.store')->middleware('can:access');
    Route::get('/drivers/{id}', [DriverController::class, 'show'])->name('drivers.show');
    Route::get('/drivers/{id}/edit', [DriverController::class, 'edit'])->name('drivers.edit')->middleware('can:access');
    Route::put('/drivers/{id}', [DriverController::class, 'update'])->name('drivers.update')->middleware('can:access');
    Route::delete('/drivers/{id}', [DriverController::class, 'destroy'])->name('drivers.destroy')->middleware('can:access');

    // Rota vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create')->middleware('can:access');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store')->middleware('can:access');
    Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::get('/vehicles/{id}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit')->middleware('can:access');
    Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update')->middleware('can:access');
    Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy')->middleware('can:access');
});


// rotas que possuem o can:access é o que determina os níveis de usuário.

require __DIR__ . '/auth.php';
