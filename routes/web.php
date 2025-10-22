<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

  // Rota da raiz do sistema
Route::get('/', [UserController::class, 'index'])->name('user.index');
  // Rota de apresentação
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');
  // Rota do formulário
Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
  // Rota de ação do formulário (armazenamento)
Route::post('/store-user', [UserController::class, 'store'])->name('user-store');

