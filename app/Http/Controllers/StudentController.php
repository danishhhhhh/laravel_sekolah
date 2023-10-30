<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student', ["title" => "student", "students" => Students::all()],);
    }
}
