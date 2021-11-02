<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

// Home routes
Route::get('/', [HomeController::class, 'index']);
// Message routes
Route::post("/create", [MessageController::class, 'create']);
Route::get("/view/{id}", [MessageController::class, 'view']);
Route::delete("/delete/{id}", [MessageController::class, 'delete']);
