@extends('layouts.app')
@section('content')
    <div class="container ">
        @if ($type == 'tech')
            <form action="addteachersave" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif


        @if ($type == 'stu')
            <form action="addteachersave" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif

        @if ($type == 'gal')
            <form action="/addgalsave" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif

        @if ($type == 'image')
            <form action="addimagesave" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif


        @if ($type == 'log')
            <form action="addImageL0gsave" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif


        @if ($type == 'fayl')
            <form action="/addfayl" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="file" accept=".pdf" name="pdf" class="form-control"
                        id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        @endif
    </div>

    @if ($type == 'addvideo')
        <form action="/addvideos" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Link</label>
                <input type="text" name="file" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    @endif
@endsection
