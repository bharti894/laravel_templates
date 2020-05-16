<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Edit INFO</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
<!-- Messages Dropdown Menu -->
<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>
<!-- Notifications Dropdown Menu -->
<li class="nav-item dropdown">

<div class="dropdown-divider"></div>


</li>
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
<a href="../../index3.html" class="brand-link">
<img src="../../dist/img/AdminLTELogo.png"
alt="AdminLTE Logo"
class="brand-image img-circle elevation-3"
style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('/images/'.Auth::user()->file)}}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="/profile" class="d-block">{{Auth::user()->name}}</a>
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
</p>
</a>
</li>


<li class="nav-item">
<a href="/users" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Users</p>
</a>
</li>
<li class="nav-item">
<a href="/add" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Register</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
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
<h1>Edit User data</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Update user data</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<!-- Main content -->
<section class="content">
<form action="/edituser/{{$user[0]->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-md-6">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">General</h3>

    <div class="card-tools">
    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"> -->
    <i class="fas fa-minus"></i></button>
    </div>
    </div>
    <div class="card-body">
    <div class="form-group">
    <label for="inputName">Name</label>

    <input type="text" id="name" name="name" class="form-control" value="{{$user[0] -> name}}">
    </div>
    <div class="form-group">
    <label for="inputDescription">Email</label>
    <input type="text" id="email" name="email" class="form-control" value="{{$user[0] -> email}}">
    </div>

    <div class="form-group">
     <label for="inputStatus">Gender</label>
    <select class="form-control custom-select" name="gender" value="{{$user[0] -> gender}}">
    <option selected disabled>Select one</option>
    <option {{ ( $user[0] -> gender == 'Male') ? 'selected' : '' }}>Male</option>
    <option {{ ( $user[0] -> gender == 'Female') ? 'selected' : '' }}>Female</option>
    <option {{ ( $user[0] -> gender == 'Transgender') ? 'selected' : '' }}>Transgender</option>
    </select>
    </div>

    <div class="form-group">
    <label>Hobby:</label>
    <input type="checkbox" name= "Hobby[]" value="Reading" {{Str::contains($user[0]->hobby,'Reading') ? 'checked' : ''}}>
    <label> Reading </label>
    <label></label>                                   
    <input type= "checkbox" name= "Hobby[]" value= "Writing" {{Str::contains($user[0]->hobby,'Writing') ? 'checked' : '' }}>
    <label>Writing</label>  <!-- here we check if writing is in user[0] where user[0] contains REading,writing,Travelling-->
    <label></label>
    <input type="checkbox" name="Hobby[]" value= "Travelling" {{Str::contains($user[0]->hobby,'Travelling') ? 'checked' : '' }}>
    <label> Travelling </label>
    <br>
    <!-- <input type="text" id="hobby" name="hobby" class="form-control" value="{{$user[0] -> hobby}}"> -->
    </div>

    <div class="form-group">
    <label for="inputProjectLeader">File</label>
    <input type="file" id="inputProjectLeader" class="form-control" name="file"  >
    </div>

    <!-- /.card -->
    </div>
    </div>
    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Update</button>

    </div>
</form>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.0.4
</div>
<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
