<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UsinaController;


Route::middleware('auth')->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/meu-perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/meu-perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rota welcome
    Route::get('/', [NavController::class, 'welcome'])->name('welcome');

    // rota requests
            Route::get('/solicitacoes', [NavController::class, 'request'])->name('usina.request');
            // rota add requests
            Route::get('/adicionar/solicitacao', [NavController::class, 'createRequest'])->name('usina.create-request');
            // rota view requests
            Route::get('/visualizar/solicitacao', [NavController::class, 'showRequest'])->name('usina.show-request');
            // rota edit requests
            Route::get('/editar/solicitacao', [NavController::class, 'editRequest'])->name('usina.edit-request');

    // rota requesters
            Route::get('/solicitantes', [NavController::class, 'requesters'])->name('usina.requesters');
            // rota add requesters
            Route::get('/adicionar/solicitantes', [NavController::class, 'createRequesters'])->name('usina.create-requesters');
            // rota view requesters
            Route::get('/visualizar/solicitantes', [NavController::class, 'showRequesters'])->name('usina.show-requesters');
            // rota edit requesters
            Route::get('/editar/solicitantes', [NavController::class, 'editRequesters'])->name('usina.edit-requesters');

    // rota materials
            Route::get('/materiais', [NavController::class, 'materials'])->name('usina.materials');
            // rota add requesters
            Route::get('/adicionar/material', [NavController::class, 'createMaterials'])->name('usina.create-materials');
            // rota view requesters
            Route::get('/visualizar/material', [NavController::class, 'showMaterials'])->name('usina.show-materials');
            // rota edit requesters
            Route::get('/editar/material', [NavController::class, 'editMaterials'])->name('usina.edit-materials');

    // rota driver
            Route::get('/motoristas', [NavController::class, 'driver'])->name('usina.driver');
            // rota add requesters
            Route::get('/adicionar/motorista', [NavController::class, 'createDriver'])->name('usina.create-driver');
            // rota view requesters
            Route::get('/visualizar/motorista', [NavController::class, 'showDriver'])->name('usina.show-driver');
            // rota edit requesters
            Route::get('/editar/motorista', [NavController::class, 'editDriver'])->name('usina.edit-driver');

    // rota vehicle
            Route::get('/veiculos', [NavController::class, 'vehicle'])->name('usina.vehicle');
            // rota add requesters
            Route::get('/adicionar/veiculo', [NavController::class, 'createVehicle'])->name('usina.create-vehicle');
            // rota view requesters
            Route::get('/visualizar/veiculo', [NavController::class, 'showVehicle'])->name('usina.show-vehicle');
            // rota edit requesters
            Route::get('/editar/veiculo', [NavController::class, 'editVehicle'])->name('usina.edit-vehicle');

});

require __DIR__.'/auth.php';
