<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container ">
            <a href="/addimage" class="btn btn-outline-primary mb-3">Add</a>
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
                    @foreach ($image as $dd)
                        <tr>
                            <th scope="row">{{ $dd->id }}</th>
                            <td>{{ $dd->name }}</td>
                            <td><img src="images/{{ $dd->image }}" width="100" alt="{{ $dd->image }}"></td>
                            <td>
                                <!-- <a href="/delete/{{ $dd->id }}" class='btn btn-danger'>Delete</a> -->
                                <a href="/dgal/{{ $dd->id }}" class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection


</body>

</html>
