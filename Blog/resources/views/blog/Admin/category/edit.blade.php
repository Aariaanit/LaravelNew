@extends('blog.Admin.master')
@section('title', 'Edit Category')

@section('content')
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h4 class="mt-4">Edit Category</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>  
            @endif
            <form action="{{ url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Category Name</label>
                    <input type="text" name="name" value="{{ $category->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{ $category->slug}}"  class="form-control">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control" rows="5">
                     {{ $category->description}}
                    </textarea>
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <h6>Status Mode</h6>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }}>
                </div>
                <div class="col-md-6">
                    <button type="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection