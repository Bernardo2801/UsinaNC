<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsinaController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

# Rota automóvel:
Route::get('/veiculo', function () {
    return view('usina.veiculo');
})->middleware(['auth', 'verified'])->name('veiculo');

# Rota motorista:
Route::get('/motorista', function () {
    return view('usina.motorista');
})->middleware(['auth', 'verified'])->name('motorista');

# Rota materiais:
Route::get('/materiais', function () {
    return view('usina.materiais');
})->middleware(['auth', 'verified'])->name('materiais');

# Rota solicitantes:
Route::get('/solicitantes', function () {
    return view('usina.solicitantes');
})->middleware(['auth', 'verified'])->name('solicitantes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
