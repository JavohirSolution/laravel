<div class="container ">
    <form action="/editsavestu/{{ $olim->id }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{ $olim->name }}" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" name="file" value="{{ $olim->email }}" class="form-control"
                id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</div>
