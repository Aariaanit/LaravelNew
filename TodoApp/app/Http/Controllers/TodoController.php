<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;
use App\Models\Todo;

class TodoController extends Controller
{

    // public function index() {
    //     //Me Query builder
    //     $todos = DB::table('todos')->get();
       
    //     $todos = DB::table('todos')->where('title','Task me Seeder')->get();
    //     $todos = DB::table('todos')->where('completed',1)->get();
    //     $todos = DB::table('todos')->paginate(10);
        
    //     return view('todos', ['todos' =>$todos]);
    
      
    //   }

    //Oren e ardhshme
      public function index() {

        
        $todos = Todo::paginate(10);
        //return view('todos', ['todos' =>$todos]);
        $open_todos = Todo::where('completed', 0)->count();
        $completed_todos = Todo::where('completed', 1)->count();
        return view('todos.index', [
                     'todos' => $todos,
                     'open_todos' => $open_todos,
                     'completed_todos' => $completed_todos
                 ]);

    }

}
