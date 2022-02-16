<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\WeatherController;
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

Route::get('/', function () {
    return view('welcome');
});

// Resources for weather class
Route::resource('weather', WeatherController::class);
/*Route::group(['namespace' => 'API'], function() {
    Route::apiResource('weather', 'WeatherController');
});*/