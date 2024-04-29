<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsinaController;


Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

# Rota requests:
Route::get('/solicitacao', function () {
    return view('usina.request');
})->middleware(['auth', 'verified'])->name('usina.request');

# Rota adicionar request:
Route::get('/adicionar/solicitacao', function () {
    return view('usina.create.create-request');
})->middleware(['auth', 'verified'])->name('usina.create-request');

# Rota visualizar request:
Route::get('/visualizar/solicitacao', function() {
    return view('usina.show.show-request');
})->middleware(['auth', 'verified'])->name('usina.show-request');

# Rota veículo:
Route::get('/veiculo', function () {
    return view('usina.vehicle');
})->middleware(['auth', 'verified'])->name('usina.vehicle');

# Rota adicionar veículo:
Route::get('/adicionar/veiculo', function () {
    return view('usina.create.create-vehicle');
})->middleware(['auth', 'verified'])->name('usina.create-vehicle');

# Rota visualizar veículo:
Route::get('/visualizar/veiculo', function () {
    return view('usina.show.show-vehicle');
})->middleware(['auth', 'verified'])->name('usina.show-vehicle');

# Rota motorista:
Route::get('/motorista', function () {
    return view('usina.driver');
})->middleware(['auth', 'verified'])->name('usina.driver');

# Rota adicionar motorista:
Route::get('/adicionar/motorista', function (){
    return view('usina.create.create-driver');
})->middleware(['auth', 'verified'])->name('usina.create-driver');

# Rota visualizar motorista:
Route::get('/visualizar/motorista', function (){
    return view('usina.show.show-driver');
})->middleware(['auth', 'verified'])->name('usina.show-driver');

# Rota materiais:
Route::get('/materiais', function () {
    return view('usina.materials');
})->middleware(['auth', 'verified'])->name('usina.materials');

# Rota adicionar material:
Route::get('/adicionar/material', function (){
    return view('usina.create.create-materials');
})->middleware(['auth', 'verified'])->name('usina.create-materials');

# Rota visualizar material:
Route::get('/visualizar/material', function (){
    return view('usina.show.show-materials');
})->middleware(['auth', 'verified'])->name('usina.show-materials');

# Rota solicitantes:
Route::get('/solicitantes', function () {
    return view('usina.requesters');
})->middleware(['auth', 'verified'])->name('usina.requesters');

# Rota adicionar solicitantes:
Route::get('/adicionar/solicitantes', function () {
    return view('usina.create.create-requesters');
})->middleware(['auth', 'verified'])->name('usina.create-requesters');

# Rota visualizar solicitantes:
Route::get('/visualizar/solicitantes', function () {
    return view('usina.show.show-requesters');
})->middleware(['auth', 'verified'])->name('usina.show-requesters');

Route::middleware('auth')->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/meu-perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/meu-perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
