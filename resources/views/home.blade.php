
@extends('layouts.master')

@section('c')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    @foreach($v as $sv)
  <tbody>
    <tr>
      <td>{{$sv->FirstName}}</td>
      <td>{{$sv->LastName}}</td>
      <td>{{$sv->email}}</td>
      <td>
        <a href="{{'/layouts/edit/'.$sv->id}}" class="btn btn-outline-success my-2 ">edit</a> <a href="{{url('/home/'.$sv->id)}}" class="btn btn-danger my-2 ">delete</a>
      </td>
    </tr>
    <tr>
     
  </tbody>
@endforeach

</table>


@endsection
<!--akhan a @section('c') dia @endsection ai section vidtor ja ase master a jehan a @yeild ase  okhan a view kore. ar master page ar sob @extend kora hoyse   -->




