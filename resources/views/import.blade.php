<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    @if($type == 'one')
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 6 Import 
        </div>
        <div class="card-body">
            <form action="/import" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
        </div>
    </div>
    @endif
    @if($type == 'lol')
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 7 Import 
        </div>
        <div class="card-body">
            <form action="/import3" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Gallery Data</button>
            </form>
        </div>
    </div>
    @endif
    @if($type == 'mess')
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 8 Import 
        </div>
        <div class="card-body">
            <form action="/importmess2" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Message Data</button>
            </form>
        </div>
    </div>
    @endif
</div>
   
</body>
</html>