<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

Route::get('/', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('login')->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::prefix('member')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
    Route::get('/tambah', [MemberController::class, 'create']);
    Route::post('/tambah', [MemberController::class, 'store']);
  });
});