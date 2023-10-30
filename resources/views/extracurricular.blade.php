@extends("layout.main")

@section("container")
    <h1>Ini Halaman Extra Curricular</h1>
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
        @foreach($students as $index => $student)
            <tr>
                <th scope="row">{{$index + 1}}</th>
                <td>{{$student['nama']}}</td>
                <td>{{$student['nama_pembina']}}</td>
                <td>{{$student['description']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
