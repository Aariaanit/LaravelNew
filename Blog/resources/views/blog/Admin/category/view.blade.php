@extends('blog.Admin.master')
@section('title', 'View Category')

@section('content')
    {{-- <h1> View Category</h1> --}}
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header ">
            <h4>View Category
                <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <img src="{{ asset('assetsAdmin/images/'.$item->image) }}" alt="img" style="width:100px;height:50px">
                        </td>
                        <td>{{ $item->status == '1' ? 'Hidden':'Show' }}</td>
                        <td>
                            <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            {{-- <form action="{{ url('admin/delete-category/'.$item->id) }}" method="POST" onsubmit="return confirm('A jeni i sigurt!')" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form> --}}
                            

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection