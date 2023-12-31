<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('todos',[TodoController::class, 'index'])->name('todos');

Route::get('create',[TodosController::class, 'create'])->name('create');

Route::resource('todos', TodosController::class);