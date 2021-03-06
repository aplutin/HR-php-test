<?php

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

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', class_basename(OrdersController::class) . '@list');
Route::get('/orders/', class_basename(OrdersController::class) . '@list');
Route::get('/weather/getTemperature/', class_basename(WeatherController::class) . '@getTemperature');
