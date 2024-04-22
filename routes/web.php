<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsinaController;


# Rota requests:
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

# Rota adicionar request:
Route::get('/adicionar/solicitacao', function () {
    return view('usina.create-request');
})->middleware(['auth', 'verified'])->name('create-request');

# Rota veículo:
Route::get('/veiculo', function () {
    return view('usina.vehicle');
})->middleware(['auth', 'verified'])->name('usina.vehicle');

# Rota adicionar veículo:
Route::get('/adicionar/veiculo', function () {
    return view('usina.create-vehicle');
})->middleware(['auth', 'verified'])->name('usina.create-vehicle');

# Rota motorista:
Route::get('/motorista', function () {
    return view('usina.driver');
})->middleware(['auth', 'verified'])->name('usina.driver');

# Rota adicionar motorista:
Route::get('/adicionar/motorista', function (){
    return view('usina.create-driver');
})->middleware(['auth', 'verified'])->name('usina.create-driver');

# Rota materiais:
Route::get('/materiais', function () {
    return view('usina.materials');
})->middleware(['auth', 'verified'])->name('usina.materials');

# Rota adicionar material:
Route::get('/adicionar/material', function (){
    return view('usina.create-materials');
})->middleware(['auth', 'verified'])->name('usina.create-materials');

# Rota solicitantes:
Route::get('/solicitantes', function () {
    return view('usina.requesters');
})->middleware(['auth', 'verified'])->name('usina.requesters');

# Rota adicionar solicitantes:
Route::get('/adicionar/solicitantes', function () {
    return view('usina.create-requesters');
})->middleware(['auth', 'verified'])->name('create-requesters');

Route::middleware('auth')->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/meu-perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/meu-perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
