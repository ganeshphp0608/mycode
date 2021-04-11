@extends('layout')
@section('content')
<div>

@if ($message = Session::get('loginstatus'))
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


</div>
<div align="right" class="row col-sm-8">
<a href="/register" class="btn btn-primary" >Register</a>
</div>


<div class="container bottom-footer">



<div class="row col-sm-6 col-sm-offset-6">

<form class="form-horizontal" method="POST" action="/login" >
  <div class="form-group">
  @csrf 
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" required name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3"  class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" required name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>

@endsection
