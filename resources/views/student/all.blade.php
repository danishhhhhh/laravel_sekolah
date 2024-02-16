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
    <div class="col-md-6">
        <div class="form-group">
            <form method="GET" action="{{ url('/student') }}">
                <div class="input-group">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="search" name="search"
                               value="{{ request('search') }}">
                        <label for="floatingInput">Search</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <div class="nav-item ms-1 dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu btn-primary">
                            @foreach($kelas as $kelass)
                                <li><a class="dropdown-item" href="/student/filter/{{$kelass->id}}">{{$kelass->nama}}</a></li>
                            @endforeach
                            <li><a class="dropdown-item" href="/student">Semua Data</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($students as $student)
            <tr class="align-middle">
                <th scope="row">{{$loop->iteration + ($students->currentPage() - 1) * 20}}</th>
                <td>{{$student->nis}}</td>
                <td>{{$student->nama}}</td>
                <td>{{$student->kelass->nama}}</td>
                <td>{{$student->alamat}}</td>
                <td>{{$student->tgl_lahir}}
                <td class="d-flex justify-content-start align-items-center">
                    <a type="button" href="/student/detail/{{$student -> id}}">
                        <button class="btn btn-outline-primary me-3">Detail</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{$students->links()}}
    </div>
@endsection
