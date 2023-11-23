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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/prizren', function () {
    return "<h1>Shkolla Digjitale Prizren</h1>";
});

//CSRF Protection (Cross Site Request Forgery)
 
    // Route::get($uri, $callback);

    // Route::post($uri, $callback);

    // Route::put($uri, $callback);

    // Route::patch($uri, $callback);

    // Route::delete($uri, $callback);

    // Route::options($uri, $callback);
 

//Perdoret per te gjitha vlerat

// Route::match(['get', 'post'], '/', function () {  
// //  
// });  

// Route::any('/', function ()   
// {  
// // 
// }); 



//Laravel Routing Parameters


//Home page

Route::get('/', function()  
{  
  return view('home');   
}  
);  
//About Page
Route::get('/about', function()  
{  
  return "This is a about page";   
}  
);  
//Contact Page
Route::get('/contact', function()  
{  
  return "This is a contact page";   
}  
); 

//Required Parameters

//Example with route parameters
//Id page
Route::get('/product/{id}', function($id)  
{  
  return "id number is : ". $id;   
}  
); 

// //Optional Parameters
// //User page

Route::get('user/{name?}', function ($name=null) 
{  
    return $name;  
});  

//User page default
Route::get('admin/{name?}', function ($name = 'Arianit') 
{  
    return $name;  
});  

// //Name page
Route::get('users/{name?}', function ($name=null) 
{  
    return $name;
    
})->where('name','[a-zA-ZëË]+');  


// // //User id
 Route::get('user1/{id?}', function ($id=null) 
{  
    return "id is : ". $id;  

})->where('id','[0-9]+');  
