<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;

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


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return view('index');
// });

//Kontrolera Normal
Route::get('/post',[PostController::class,'index']);

// Route::get('/blog',[BlogController::class,'create']);


//Kontroller Crud

Route::match(['get', 'post'], '/create', [BlogController::class, 'create']);

Route::resource('/blog',BlogController::class);