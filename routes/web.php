<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::post('/auth/logout', [AuthController::class, 'logout']);



// Admin
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');



// Route Admin
