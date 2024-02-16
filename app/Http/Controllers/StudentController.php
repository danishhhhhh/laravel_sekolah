<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $student = Student::where('nama','like',"%".$request->input('search')."%")->paginate(20);
        if (\request()->is('dashboard/student')){
            return view('dashboard.student.all', ["title" => "Student", "students" => $student, "kelas" => Kelas::all()]);
        } else {
            return view('student.all', ["title" => "Student", "students" => $student, "kelas" => Kelas::all()]);
        }
    }

    public function filter($id)
    {
        $result = Student::where('kelas', $id)->paginate(20);

        if (\request()->is('dashboard/student/filter/*')){
            return view('dashboard.student.all', ["title" => "Student", "students" => $result, "kelas" => Kelas::all()]);
        } else {
            return view('student.all', ["title" => "Student", "students" => $result, "kelas" => Kelas::all()]);
        }

    }

    public function show(Student $student)
    {
        if (\request()->is('dashboard/student/detail/*')) {
            return view('dashboard.student.detail', [
                "title" => "Detail",
                "students" => Student::find($student->id)
            ]);
        } else {
            return view('student.detail', [
                "title" => "Detail",
                "students" => Student::find($student->id)
            ]);
        }
    }

    public function create()
    {
        return view('dashboard.student.create', [
            "title" => "Create",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::create($validateData);
        if ($result) {
            return redirect('/dashboard/student')->with('success', "Data Siswa Berhasil Ditambahkan");
        }
    }

    public function destroy(Student $student)
    {
        $result = Student::destroy($student->id);

        if ($result) {
            return redirect('/dashboard/student')->with('success', "Data Siswa Berhasil Dihapus");
        } else {
            return redirect('/dashboard/student')->with('error', "Gagal menghapus data Siswa");
        }
    }

    public function edit(Student $student)
    {
        return view('dashboard.student.edit', [
            "title" => "Edit",
            "student" => $student,
            "kelas" => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::where('id', $student->id)->update($validateData);

        if ($result) {
            return redirect('/dashboard/student')->with('success', "Data Siswa Berhasil Diedit");
        }
    }
}

