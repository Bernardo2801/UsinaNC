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
            Route::get('/solicitacoes', [SolicitationController::class, 'index'])->name('usina.request');
            // rota add requests
            Route::get('/adicionar/solicitacao', [SolicitationController::class, 'create'])->name('usina.create-request');
            // rota view requests
            Route::get('/visualizar/solicitacao', [SolicitationController::class, 'show'])->name('usina.show-request');
            // rota edit requests
            Route::get('/editar/solicitacao', [SolicitationController::class, 'edit'])->name('usina.edit-request');

    // rota requesters
            Route::get('/solicitantes', [RequesterController::class, 'index'])->name('usina.requesters');
            // rota add requesters
            Route::get('/adicionar/solicitantes', [RequesterController::class, 'create'])->name('usina.create-requesters');
            // rota view requesters
            Route::get('/visualizar/solicitantes', [RequesterController::class, 'show'])->name('usina.show-requesters');
            // rota edit requesters
            Route::get('/editar/solicitantes', [RequesterController::class, 'edit'])->name('usina.edit-requesters');

    // rota materials
            Route::get('/materiais', [MaterialController::class, 'index'])->name('usina.materials');
            // rota add requesters
            Route::get('/adicionar/material', [MaterialController::class, 'create'])->name('usina.create-materials');
            // rota view requesters
            Route::get('/visualizar/material', [MaterialController::class, 'show'])->name('usina.show-materials');
            // rota edit requesters
            Route::get('/editar/material', [MaterialController::class, 'edit'])->name('usina.edit-materials');

    // rota driver
            Route::get('/motoristas', [DriverController::class, 'index'])->name('usina.driver');
            // rota add requesters
            Route::get('/adicionar/motorista', [DriverController::class, 'create'])->name('usina.create-driver');
            // rota view requesters
            Route::get('/visualizar/motorista', [DriverController::class, 'show'])->name('usina.show-driver');
            // rota edit requesters
            Route::get('/editar/motorista', [DriverController::class, 'edit'])->name('usina.edit-driver');

    // rota vehicle
            Route::get('/veiculos', [VehicleController::class, 'index'])->name('usina.vehicle');
            // rota add requesters
            Route::get('/adicionar/veiculo', [VehicleController::class, 'create'])->name('usina.create-vehicle');
            // rota view requesters
            Route::get('/visualizar/veiculo', [VehicleController::class, 'show'])->name('usina.show-vehicle');
            // rota edit requesters
            Route::get('/editar/veiculo', [VehicleController::class, 'edit'])->name('usina.edit-vehicle');

});

require __DIR__.'/auth.php';
