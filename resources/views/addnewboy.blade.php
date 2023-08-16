
@extends('layouts.app')

@section('content')



<div class="container ">
 

  <form action="addnewboyserve" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="Email" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Saqlash</button>
 
  </form>

</div>


@endsection


