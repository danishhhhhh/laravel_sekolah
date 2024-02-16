@extends("dashboard.main")

@section('container')
    <div class="container mt-4">
        <h1>Ini Halaman {{$title}}</h1>

        <a href="/kelas" class="btn btn-primary mb-4">Back to List</a>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Kelas</h5>
            </div>
            <div class="card-body">
                <form action="/dashboard/kelas/update/{{$kelas->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter kelas name" value="{{old('nama', $kelas->nama)}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Kelas</button>
                </form>
            </div>
        </div>
    </div>
@endsection
