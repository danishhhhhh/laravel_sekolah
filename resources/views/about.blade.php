@extends("layout.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>

    <p class="fs-3">Nama: {{$nama}}</p>
    <p class="fs-3">Kelas: {{$kelas}}</p>
    <h1>
        Foto:
        <img class="ms-5 mt-5 rounded-circle" src="{{$image}}" alt="">
    </h1>
@endsection
