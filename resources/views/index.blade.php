@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .push-top {
    margin-top: 50px;
  }
  body{
    background-image:url(https://wallpapercave.com/wp/wp2327033.jpg);
    background-repeat:no-repeat;
    background-size:cover;

  }
</style>


      
        
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <p  style="font-size:20px;color:white">Information</p>
          </div>
            <div class="pull-right" >
                    <a class="btn btn-success" href="{{ route('students.create') }}" title="Add a user"> <i class="fa fa-user-plus" style="font-size:25px;color:red"></i></a>
            </div>
        </div>
  <table class="table" >
    <thead >
        <tr style=" background-image:linear-gradient( #d91633, #d9b216);color:white">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody style="background-color:white;">
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection