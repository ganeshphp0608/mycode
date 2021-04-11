@extends('layout')
@section('content')
@if ($message = Session::get('fileuploaded'))
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

          <form class="navbar-form" action="/search" method="post">
          @csrf
        <div  class="form-group">
          <input  type="text" name="search" class="form-control" placeholder="Filename/uploadedby/type/size">
        </div>
        <button type="submit" class="btn btn-default">Filter</button>
      </form>


<div class="col-sm-6 col-sm-offset-6" >
<form action="/uploadimage" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<br/>
<button type="submit" name="upload">UploadImage</button>
</form>
</div>


<div class="container">
  <h2>User Data</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Image</th>
        <th>Uploaded By</th>
        <th>File Type</th>
        <th>File Size</th>
        <th>File Name</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($result as $value)
    <tr>
       
        @if( $value->file_extension=='jpg' or $value->file_extension=='png' )
        <td><img src="/uploads/{{$value->newfilename}}" width="75px" height="45px"></td>
        @else
        <td>Preview NA</td>
        @endif
      
        <td> {{$value->file_uploadby}}</td>
        <td> {{$value->file_type}}</td>
        <td> {{$value->file_size}}</td>
        <td> {{$value->file_name}}</td>
        
      
   
    </tr>   
   @endforeach
     
    
     
    </tbody>
  </table>
</div>

</body>
</html>

@endsection