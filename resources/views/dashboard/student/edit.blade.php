@extends("dashboard.main")
@section('container')
    <div class="container mt-4">
        <h1>Ini Halaman {{$title}}</h1>

        <a href="/dashboard/student" class="btn btn-primary mb-4">Back to List</a>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Student</h5>
            </div>
            <div class="card-body">
                <form action="/dashboard/student/update/{{$student->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" name="nis" class="form-control" id="nis" placeholder="Enter NIS" value="{{old('nis', $student->nis)}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter student name" value="{{old('nama', $student->nama)}}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-select" name="kelas" id="">
                            @foreach($kelas as $kelasss)
                                <option name="kelas" value="{{ $kelasss->id }}" {{ $kelasss->id == $student->kelas ? "selected" : "" }}>{{$kelasss->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nis">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Enter NIS" value="{{old('tgl_lahir', $student->tgl_lahir)}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter student address" value="{{old('alamat', $student->alamat)}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Student</button>
                </form>
            </div>
        </div>
    </div>
@endsection
