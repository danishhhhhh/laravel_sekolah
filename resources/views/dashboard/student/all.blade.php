@extends("dashboard.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>

    <a href="/dashboard/student/create">
        <button type="button" class="btn btn-primary btn-md mx-0 my-5">ADD STUDENT</button>
    </a>

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
            <form method="GET" action="{{ url('/dashboard/student') }}">
                <div class="input-group">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="search" name="search"
                               value="{{ request('search') }}">
                        <label for="floatingInput">Search</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <div class="nav-item ms-1 ">
                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown dropdown-menu btn-primary">
                            @foreach($kelas as $kelass)
                                <li><a class="dropdown-item" href="/dashboard/student/filter/{{$kelass->id}}">{{$kelass->nama}}</a></li>
                            @endforeach
                            <li><a class="dropdown-item" href="/dashboard/student">Semua Data</a></li>
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

            @auth
                <th scope="col">Action</th>
            @endauth
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
                    <a type="button" href="/dashboard/student/detail/{{$student -> id}}">
                        <button class="btn btn-outline-primary me-3">Detail</button>
                    </a>
                    <a type="button" href="/dashboard/student/edit/{{$student -> id}}">
                        <button class="btn btn-outline-success me-3">Update</button>
                    </a>
                    <form method="POST" action="/dashboard/student/delete/{{$student -> id}}" class="my-0">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete?')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{$students->links()}}
    </div>
@endsection
