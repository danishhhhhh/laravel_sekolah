@extends("dashboard.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>

    @auth
    <a href="/dashboard/kelas/create"><button type="button" class="btn btn-primary btn-md mx-0 my-5">ADD KELAS</button></a>
    @endauth

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

            @auth
            <th scope="col">Action</th>
            @endauth
        </tr>
        </thead>

        <tbody>
        @foreach($kelass as $kelas)
            <tr class="align-middle">
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$kelas->nama}}</td>
                <td class="d-flex justify-content-start align-items-center">
                    <a type="button" href="/dashboard/kelas/edit/{{$kelas -> id}}">
                        <button class="btn btn-outline-success me-3">Update</button>
                    </a>
                    <form method="POST" action="/dashboard/kelas/delete/{{$kelas -> id}}" class="my-0">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
