@extends("layout.main")

@section("container")
    <div class="container mt-4">
        <h1>Ini Halaman {{$title}}</h1>

        <a href="/student" class="btn btn-primary mb-4">Back to List</a>

        <div class="card mt-4">
            <div class="card-body">
                <p class="card-text">NIS: {{$students->nis}}</p>
                <p class="card-text">Nama: {{$students->nama}}</p>
                <p class="card-text">Kelas: {{$students->kelas}}</p>
                <p class="card-text">Tanggal Lahir: {{$students->tgl_lahir}}</p>
                <p class="card-text">Alamat: {{$students->alamat}}</p>
            </div>
        </div>
    </div>
@endsection
