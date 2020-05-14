<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ADMIN PROFILE</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{('../../dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
  </ul>

  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="../../dist/img/AdminLTELogo.png"
          alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light">MOOD</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src='{{asset("/images/$user->file")}}' class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{$user -> name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i></p>
          </a>
          </li>

            <li class="nav-item">
              <a href="../examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
        </li>
        <li class="nav-item">
              <a href="/add" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Register</p>
              </a>
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                      src='{{asset("/images/$user->file")}}'
                      alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$user -> name}}</h3>

              <p class="text-muted text-center">{{$user -> email}}</p>

              

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

              <p class="text-muted">{{$user -> location}}</p>

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                
          <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Update profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change password</a></li>
        </ul>
      </div><!-- /.card-header -->
      
      @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
      <div class="card-body">
      <div class="tab-content">
        
      <div class="tab-pane" id="timeline">
          <!-- The timeline -->
     
            <!-- timeline time label -->
       <form method="post" action="/profile" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="inputDescription">Name</label>
            <input type="text" id="name" class="form-control" name="name">
          </div>

          <div class="form-group">
          <label for="inputDescription">Email</label>
          <input type="text" id="email" class="form-control" name="email" >
          </div>
          <div class="form-group">
          <label for="inputStatus">Location</label>
          <input type="text" id="location" class="form-control" name="location" >
          </div>
          <div class="form-group">
          <label for="inputStatus">Choose profile</label>
          <input type="file" id="file" class="form-control" name= "file">
          </div>
          <br>
          <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-danger">Update</button>
          </div>
        </form>
      </div>
 
          <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal" method="post" action="/updatepassword">
                  @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Old password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">New password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New password">
                      </div>
                    </div>
                      
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.0.4
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">MOOD</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
