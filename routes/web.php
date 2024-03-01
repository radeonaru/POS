<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'home']);

Route::get('/user/{id}/name/{name}',[UserController::class, 'profile']);

Route::prefix('category')->group(function () { 
    Route::get('/food_beverage', [CategoryController::class, 'food_beverage']); 
    Route::get('/beauty_health', [CategoryController::class, 'beauty_health']); 
    Route::get('/home_care', [CategoryController::class, 'home_care']); 
    Route::get('/baby_kid', [CategoryController::class, 'baby_kid']); 
}); 

Route::get('/sales', [SalesController::class, 'sales']);
