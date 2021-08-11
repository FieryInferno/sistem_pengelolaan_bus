<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BusController;

Route::get('/', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('login')->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);

  Route::prefix('member')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
    Route::get('/tambah', [MemberController::class, 'create']);
    Route::post('/tambah', [MemberController::class, 'store']);
    Route::get('/edit/{id_member}', [MemberController::class, 'edit']);
    Route::put('/edit/{id_member}', [MemberController::class, 'update']);
    Route::delete('/hapus/{id_member}', [MemberController::class, 'destroy']);
  });

  Route::prefix('bus_masuk')->group(function () {
    Route::get('/', [BusController::class, 'index']);
    Route::get('/tambah', [BusController::class, 'create']);
    Route::post('/tambah', [BusController::class, 'store']);
    Route::get('/edit/{id}', [BusController::class, 'edit']);
    Route::put('/edit/{id}', [BusController::class, 'update']);
  });
});