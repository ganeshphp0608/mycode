@extends('layout')
@section('content')
<div class="container">
<form method="post" action="submit_reg" enctype="multipart/form-data">
@csrf
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
  <fieldset>
    <legend>Registration Form </legend>
    
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name"  required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>            
    </div>
   
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control"  id="txtNewPassword" placeholder="Password">

    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password"  class="form-control"   id="txtConfirmPassword" placeholder="Confirm Password" required>
      <div id="match"></div>
    </div>
   
     <button type="submit" class="btn btn-primary">Submit</button>    
</form>
</div>
@endsection
