<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
       //return view('blog.home');
        $user = [
            'name' => 'Arianit',
            'age' => 29,
            'email' => 'arianittershnjaku@gmail.com'
        ];



        //return response()->json($user);
        //return response()->make($user);
        return response()->view('blog.home');

        // return response()->streamDownload(function(){
        //     echo file_get_contents("https://laravel.com/docs/9.x");
        // },"documentation.html");
    }

    public function about(){
        return view('blog.about');
    }

    public function contact(){
        if(request()->method() == "POST"){
            return request()->all();
            //return request()->except("_token");
            //return request()->only("email");
            //return request()->input("email");

            //$data = request()->only('moduli');

            //return $data['moduli'];
        }
        return view('blog.contact');
    }
    
    public function login(Request $request) {
        //Validimi
        $request->validate([
         'email' => 'required|email',
         'password' => 'required|numeric',
            
        ]);

        return $request->all();
      
    }
    
   
}
