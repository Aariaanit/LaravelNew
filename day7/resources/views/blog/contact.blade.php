@extends('blog.master')

@section('title','Contact Page')

@section('content')
<div class="container">
  <div class="row">

      {{-- @dd($errors->all()) --}}
      <form class="col-lg-8" action="{{ url('login')}}" method="POST">
          @csrf
          <h1 class="text-center">Contact Form</h1>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" name="email" value="{{ old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('email') {{ $message }} @enderror
            
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              @error('password') {{ $message }} @enderror
          </div>
          <div class="form-group">
              <input type="checkbox" name="moduli[]" value="HTML" id="html">
              <label for="HTML">HTML</label>
              <input type="checkbox" name="moduli[]" value="CSS" id="css">
              <label for="CSS">CSS</label>
              <input type="checkbox" name="moduli[]" value="JS" id="js">
              <label for="JS">JS</label>
              <input type="checkbox" name="moduli[]" value="PHP" id="php">
              <label for="PHP">PHP</label>
              <input type="checkbox" name="moduli[]" value="MySQL" id="mysql">
              <label for="MySQL">MySQL</label>
              
              </div>
              <br>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
