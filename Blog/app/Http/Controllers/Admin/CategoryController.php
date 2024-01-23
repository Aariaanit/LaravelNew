<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('blog.Admin.category.view',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        $dataValidated = $request->validated();
        
        $data = new Category;
        $data -> name = $dataValidated['name'];
        $data -> slug = $dataValidated['slug'];
        $data -> description = $dataValidated['description'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('assetsAdmin/images/',$filename);
            $data -> image= $filename;
        }
        $data -> status = $request -> status == true ? '1' : '0';
        $data ->create_by = Auth::user()->id;
        $data->save();

        return redirect('admin/category')->with('message','Category added Sucessfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('blog.admin.category.edit', ['category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();

        $category = Category::find($category_id);
        $category -> name = $data['name'];
        $category -> slug = $data['slug'];
        $category -> description = $data['description'];

        if($request->hasfile('image')){


            $destination = 'assetsAdmin/images/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }


            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assetsAdmin/images/',$filename);
            $category->image = $filename;
        }
       
        $category -> status = $request->status ==true ? '1' : '0';
        $category -> create_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message','Category Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
