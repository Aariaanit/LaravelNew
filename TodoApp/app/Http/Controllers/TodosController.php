<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $data['title'] = $request['title'];
        $data['completed'] = ($request['completed'] == 1) ? 1 : 0;

        if(Todo::create($data))
        {
            return redirect()->route('todos.index')->with('status', 'Todo eshte krijuar me sukses');
        }
        else{
            return redirect()->back()->with('status', 'Diqka eshte gabim ne krijimin e Todo!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $todo = Todo::find($id);

        $data['title'] = $request['title'];
        $data['completed'] = ($request['completed'] == 1) ? 1 : 0;

        if($todo->update($data))
            return redirect()->route('todos.index')->with('status', 'Todo eshte ndryshuar me sukses');
        else
            return redirect()->back()->with('status', 'Diqka eshte gabim ne ndryshimin e Todo!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);

        if($todo->delete())
            return redirect()->route('todos.index')->with('status', 'Todo eshte fshire me sukses');
        else
            return redirect()->back()->with('status', 'Diqka eshte gabim ne fshirjen e Todo!');
    }
    
}
