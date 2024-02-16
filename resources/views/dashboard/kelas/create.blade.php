@extends("dashboard.main")

@section('container')
    <div class="container mt-4">
        <h1>Ini Halaman {{$title}}</h1>

        <a href="/dashboard/kelas" class="btn btn-primary mb-4">Back to List</a>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Kelas</h5>
            </div>
            <div class="card-body">
                <form action="/dashboard/kelas/add" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter kelas name" value="{{old('nama')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Kelas</button>
                </form>
            </div>
        </div>
    </div>
@endsection
