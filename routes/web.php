<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});
Route::get('/cars', [CarController::class, "list"])->name("cars");
Route::post('store-form-car', [CarController::class, 'store'])->name('store-form-car');
Route::get('/drivers', [DriverController::class, "list"])->name("drivers");
Route::post('store-form-driver', [DriverController::class, 'store'])->name('store-form-driver');
