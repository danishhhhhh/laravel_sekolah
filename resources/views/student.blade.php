@extends("layout.main")

@section("container")
    <h1>Ini Halaman Student</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $index => $student)
            <tr>
                <th scope="row">{{$index + 1}}</th>
                <td>{{$student['nis']}}</td>
                <td>{{$student['nama']}}</td>
                <td>{{$student['kelas']}}</td>
                <td>{{$student['alamat']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
