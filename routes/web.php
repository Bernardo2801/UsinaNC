<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsinaController;


# Rota requests:
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

# Rota adicionar request:
Route::get('/adicionar-solicitacao', function () {
    return view('usina.create-request');
})->middleware(['auth', 'verified'])->name('create-request');

# Rota veículo:
Route::get('/veiculo', function () {
    return view('usina.vehicle');
})->middleware(['auth', 'verified'])->name('vehicle');

# Rota adicionar veículo:
Route::get('/adicionar-veiculo', function () {
    return view('usina.create-vehicle');
})->middleware(['auth', 'verified'])->name('create-vehicle');

# Rota motorista:
Route::get('/motorista', function () {
    return view('usina.driver');
})->middleware(['auth', 'verified'])->name('driver');

# Rota adicionar motorista:
Route::get('/adicionar-motorista', function (){
    return view('usina.create-driver');
})->middleware(['auth', 'verified'])->name('create-driver');

# Rota materiais:
Route::get('/materiais', function () {
    return view('usina.materials');
})->middleware(['auth', 'verified'])->name('materials');

# Rota adicionar material:
Route::get('/adicionar-material', function (){
    return view('usina.create-materials');
})->middleware(['auth', 'verified'])->name('create-materials');

# Rota solicitantes:
Route::get('/solicitantes', function () {
    return view('usina.requesters');
})->middleware(['auth', 'verified'])->name('requesters');

# Rota adicionar solicitantes:
Route::get('/adicionar-solicitantes', function () {
    return view('usina.create-requesters');
})->middleware(['auth', 'verified'])->name('create-requesters');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
