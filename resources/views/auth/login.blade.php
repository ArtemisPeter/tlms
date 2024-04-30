@extends('layout.default')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 35rem;">
      <div class="card-header">
        <img src="public/dist/img/cityhigh/school-logo.png" style="width: 15%;" class="mx-auto d-block">
      </div>
      <div class="card-body">
        <form id='signin'>
          <div class="alert alert-danger d-none" id='alert' role="alert">
            Access Denied
          </div>
          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
          <button type="submit" class="btn btn-success btn-lg btn-md w-100 mb-4">Log in</button>
        </form>
        <a href="{{route('register')}}">No account yet? Click here to register!</a>
      </div>
    </div>
  </div>
@endsection
