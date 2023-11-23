<?php

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

Route::get('/php', function () {
    return view('blog.code');
});

Route::get('/blog', function () {
    return view('blog.code',
        [
            'username' => 'Larevel',
            'age' => 30
        ]
    );

});

Route::get('/blog2', function () {
    return view('blog.code',
        ['username' => '<script>alert("Hello");</script><p>Arianit</p>']
    );
});


Route::get('/blog3', function () {
    return view('blog.code',
        [
            'username' => 'Arianit',
            "age" => 28,
            'subject' => ["HTML","CSS", "JavaScript", "PHP", "MySQL", "Laravel"]
        ]
    );

});


//Master 

Route::get('/', function () {
    return view('blog.home');
});

Route::get('/about', function () {
    return view('blog.about');
});

Route::get('/contact', function () {
    return view('blog.contact');
});