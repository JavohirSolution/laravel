

@extends('layouts.app')

@section('content')



<div class="container ">
  <a href="/addgal" class="btn btn-outline-primary mb-3">Add</a>
<table class="table table-bordered table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Addition</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td>
        <img src="images/" accept=".jpg,.png" width="100" alt="x"></td>
      <td>
      </td>
    </tr>
  </tbody>
</table>
</div>


@endsection



