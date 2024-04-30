@extends('layout.default')
@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 35rem;">
      <div class="card-header">
        <img src="public/dist/img/cityhigh/school-logo.png" style="width: 15%;" class="mx-auto d-block">
      </div>
      <div class="card-body">
        <form id='signin' action="{{route('registerPost')}}" method="post" enctype = "multipart/form-data" >
          @csrf

          @if(Session:: has('Success'))
            <div class="alert alert-sucess" role="alert">
              {{Session:: get('Success')}}
            </div>
          @endif

          @if(Session:: has('Error'))
          <div class="alert alert-danger" role="alert">
              {{Session:: get('Error')}}
            </div>
          @endif

          <div class="form-floating mb-4">
              <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Teacher ID">
              <label for='employee_id'>Input your Employee Id</label>
          </div>

          <div class="row">
              <div class="col-6">
                  <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="fname">
                      <label for="username">Enter your First Name</label>
                    </div>
              </div>
              <div class="col-6">
                  <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="lname">
                      <label for="username">Enter your Last Name</label>
                    </div>
              </div>
          </div>

          <div class="form-floating mb-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Input your password</label>
          </div>



          <button type="submit" class="btn btn-success btn-lg btn-md w-100 mb-4">Log in</button>
        </form>
        <a href="{{route('login')}}">If there's an account, Click here to login!</a>
      </div>
    </div>
  </div>
@endsection
