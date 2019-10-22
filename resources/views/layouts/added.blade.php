<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
  <nav class="navbar navbar-light bg-light">
  <a href="{{url('/') }}" class="navbar-brand">CRUD</a> 
 </nav>
{!! Form::open(['url' => '/layouts.added','method'=>'post']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" name="First">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="Last" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="Last" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
@include('layouts.footer')
</body>
</html>