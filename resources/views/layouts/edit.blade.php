<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
  <nav class="navbar navbar-light bg-light">
    <!-- href=laravel link  -->
    <a href="{{url('/') }}" class="navbar-brand">CRUD</a> 
 </nav>
 <!--laraval collective form-->
{!! Form::open(['url' => '/layouts/edit','method'=>'post']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="First" value="{{$v->FirstName}}" >
<!-- show the value edit form vlue="{{$v->FirstName}}" $v variable send the edit controller-->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="Last" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="Last" value="{{$v->LastName}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" value="{{$v->email}}">
  </div>
  <input type="hidden" name="id" value="{{$v->id}}">

  <!--this type hidden id -->
  <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
<!--close laraval collective form-->
@include('layouts.footer')
</body>
</html>