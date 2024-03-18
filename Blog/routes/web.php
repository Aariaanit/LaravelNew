<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SendMailController;

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
    return view('blog.index');
})->name('home');
Route::get('/about', function () {
    return view('blog.about');
})->name('about');
Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');
Route::get('/features', function () {
    return view('blog.features');
})->name('features');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //category route
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    //Add category
    Route::get('/add-category', [CategoryController::class,'create'])->name('add-category');
    Route::post('/add-category',[CategoryController::class,'store'])->name('create');
    //Edit category
    Route::get('/edit-category/{category_id}', [CategoryController::class,'edit'])->name('edit-category');
    Route::put('/update-category/{category_id}', [CategoryController::class,'update'])->name('update-category');
    Route::get('/delete-category/{category_id}', [CategoryController::class,'destroy'])->name('delete-category');
});

    //Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/contact',[SendMailController::class,'index'])->name('contact');
    Route::post('/sendMail',[SendMailController::class,'sendMail'])->name('sendMail');