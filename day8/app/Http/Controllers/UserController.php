<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        //Database Builder
        return DB::select("select * from registration");
    }

    //Database Eloquent
    function getData(){
        return product::all();
    }

    function show(){
        
        //return product::all();
       //return view('user');

        $data= product::all();
        return view('user',['users'=>$data]);
                
    }

}
