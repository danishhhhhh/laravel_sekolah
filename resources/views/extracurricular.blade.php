@extends("layout.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Ekstra</th>
            <th scope="col">Nama Pembina</th>
            <th scope="col">Deskripsi Ekstra</th>
        </tr>
        </thead>
        <tbody>
        @foreach($extras as $extra)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$extra['nama']}}</td>
                <td>{{$extra['nama_pembina']}}</td>
                <td>{{$extra['description']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
