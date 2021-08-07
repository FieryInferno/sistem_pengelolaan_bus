<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('login')->group(function () {
  Route::get('/dashboard', [AdminController::class, 'index']);
});