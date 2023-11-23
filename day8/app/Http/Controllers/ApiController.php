<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    function index(){
        $collection = Http::get("https://reqres.in/api/users?page=1");

        return view('product',['collection'=>$collection['data']]);
    }

    function index2(){
        $collection = Http::get("https://api.coindesk.com/v1/bpi/currentprice.json");

        return view('bitcoin',['collection'=>$collection['bpi']]);
    }
}
