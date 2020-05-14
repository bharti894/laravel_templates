@extends('layouts/includes.admin')

@section('content')

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Register</h3>

<form action ="/add"  method="post" enctype="multipart/form-data">
@csrf
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
<i class="fas fa-minus"></i></button>
</div>
</div>
<div class="card-body">
<div class="form-group">
<label for="inputName">Name</label>
<input type="text" id="inputName" class="form-control" name="name">
</div>
<div class="form-group">
<label for="inputDescription">Email</label>
<input type="text" id="inputDescription" class="form-control" name="email" >
</div>
<div class="form-group">
<label for="inputStatus">Gender</label>
<select class="form-control custom-select" name="gender">
<option selected disabled>Select one</option>
<option>Male</option>
<option>Female</option>
<option>Transgender</option>
</select>
</div>
<div class="form-group">
<label for="inputClientCompany">Mobile No.</label>
<input type="integer" id="inputClientCompany" class="form-control" name= "Mobileno">
</div>

<div class="form-group">
<label for="inputProjectLeader">Hobby: </label>

<input type="checkbox" name= "Hobby[]" value= "Reading" >
<label> Reading </label>
<label></label>

<input type= "checkbox" name= "Hobby[]" value= "writing" >
<label>Writing</label>
<label></label>
<input type="checkbox" name="Hobby[]" value= "Travelling">
<label> Travelling </label>
<br>
<br>

<input type="file" id="inputProjectLeader" class="form-control" name= "file">
</div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>


</div>
<div class="row">
<div class="col-12">
<a href="#" class="btn btn-secondary">Cancel</a>
<input type="submit" value="Create new User" class="btn btn-success float-right">
</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</form>

@endsection