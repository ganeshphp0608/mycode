<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">
<style>
    .panel-header-lg {
    height: 50px !important;
}

    </style>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        DCKAP
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/homepage">
              <i class="now-ui-icons design_app"></i>
              <p> Dashboard</p>
            </a>
          </li>        
        
          <li>
            <a href="/uploadpage">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>{{ Session::get('user')->name }}</p>
            </a>
          </li>      
        
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">  @if(Session::has('user')){{ Session::get('user')->name }}</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <span class="dropdown-item">{{ Session::get('user')->name }}</span>
                  <a class="dropdown-item" href="/logout">Logout</a>
                  @else
                  <a class="dropdown-item" href="/">Login</a>


                 
                </div>
                @endif
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div style="margin-top: 25px  !important;" class="content">
       
        <div class="row">          
          <div class="col-md-12">
            <div class="card">
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
                
              <div class="card-header">
              <form class="navbar-form" action="{{ url('/search') }}" method="POST">
          @csrf
        <div  class="form-group">
          <input style="width:50%;float:left"  type="text" name="search" class="form-control" placeholder="Filename/uploadedby/type/size">
        
        <button style="float:left;margin-top:0px;border-radius:5px" type="submit" class="btn btn-primary">Filter</button>
      </form>
</div>
<div class="input-group mb-3">
  <div class="custom-file">
  <form action="{{ url('/uploadimage') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <!-- <input type="file" name="file"> -->
    <input style="width:50%;" type="file"  name="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
  <button type="submit" class="btn btn-primary" style="margin-top:-2px;border-radius:5px" name="upload">Upload</button>
  </form>
  </div>
</div>       
       <h4 class="card-title"> Users Data</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead style="background-color:#F96332;color:white" class="">
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
           
          </nav>
          <div class="copyright" id="copyright">
            &copy;      
            Designed by <a href="#" target="_blank">DCKAP</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <!-- <script src="../assets/js/plugins/chartjs.min.js"></script> -->
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>