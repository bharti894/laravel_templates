<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3|Users</title>
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

<!-- Notifications Dropdown Menu -->

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
<a href="/logout" class="nav-link">
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
<h1>Users</h1>
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



<!-- Default box -->
<div class="card">
<div class="card-header">
<h3 class="card-title">Users</h3>

<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fas fa-minus"></i></button>
<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
    <i class="fas fa-times"></i></button>
</div>
</div>

<div class="card-body p-0">
<table class="table table-striped projects">
<thead>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Hobbies</th>
<th>File</th>
<th>View</th>
<th>Delete</th>
</thead>
<tbody>
@foreach($users as $row)
<tr>
<td>{{ $row->id }}</td>
<td>{{ $row->name }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->gender }}</td>
<td>{{ $row->hobby }}</td>
<td>{{ $row->file }}</td>
<td> 
<a href='/edituser/{{ $row->id }}'>EDIT</a>
</td>
<td> 
<a href='/delete/{{ $row->id }}'>DELETE</a>
</td>
</tr>
@endforeach

</table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->

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
