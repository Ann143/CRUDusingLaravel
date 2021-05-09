@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
    body{
    background-image:url(https://wallpaperaccess.com/full/1948452.jpg);
    background-repeat:no-repeat;
    background-size:cover;

  }
</style>

<div class="card push-top" style="height: 465px">
  <div class="card-header" style="background-image: linear-gradient(#c92037, #eb8454);">
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <p  style="font-size:20px;color:white">Edit</p>
            </div>
            <div class="pull-right" style="margin-top:-37px">
            <a  href="{{ route('students.index') }}"  title="View the list of users"> <i class="fa fa-eye" style="font-size:30px;color:white;margin-left:350px;margin-top:-70px "></i></i> </a>
            </div>
        </div>
    </div>
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              
              <label style="margin-left:16px">Name</label>
              <div class="col-auto">
                   <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user" style="color:#fc033d"></i></div>
                 </div>
                  <input type="text" class="form-control"  name="name" value="{{ $student->name }}" placeholder="Enter your name">
             </div>
          </div>
          <div class="form-group">
              <label style="margin-left:16px">Email</label>
              <div class="col-auto">
                   <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-envelope" style="color:#fc033d"></i></div>
                 </div>
                  <input type="text" class="form-control"  name="email" value="{{ $student->email }}" placeholder="Enter your email">
             </div>
          </div>
          <div class="form-group">
              <label style="margin-left:16px">Phone</label>
              <div class="col-auto">
                   <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-phone" style="color:#fc033d"></i></div>
                 </div>
                  <input type="text" class="form-control"   name="phone" value="{{ $student->phone }}"placeholder="Enter your phone number">
             </div>
          </div>
          <div class="form-group">
              <label style="margin-left:16px">Password</label>
              <div class="col-auto">
                   <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-key " style="color:#fc033d"></i></div>
                 </div>
                  <input type="password" class="form-control"   name="password" value="{{ $student->password }}" placeholder="Enter your password">
             </div>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection