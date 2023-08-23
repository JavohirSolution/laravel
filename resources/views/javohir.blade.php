@extends('layouts.app')
@section('content')
    <div class="container ">
        <a href="/addjavohir" class="btn btn-info mb-3">Qo'shish</a>
        <table class="table table-bordered table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">age</th>
                    <th scope="col">Addition</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($behind as $pp)
                    <tr>
                        <th scope="row">{{ $pp->id }}</th>
                        <td>{{ $pp->name }}</td>
                        <td>{{ $pp->age }}</td>
                        <td>
                            <a href="/javohir/{{ $pp->id }}" class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
