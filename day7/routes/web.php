<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Console\Application;
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

Route::get('/',[ApplicationController::class, 'index']);

Route::get('/about',[ApplicationController::class, 'about']);

//Route::get('/contact',[ApplicationController::class, 'contact']);

Route::match(['get', 'post'],'/contact',[ApplicationController::class, 'contact']);


Route::post('/login',[ApplicationController::class, 'login']);