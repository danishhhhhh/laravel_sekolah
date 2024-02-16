@extends("layout.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger col-lg-12" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
        </tr>
        </thead>

        <tbody>
        @foreach($kelass as $kelas)
            <tr class="align-middle">
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$kelas->nama}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
