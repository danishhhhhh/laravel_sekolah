<?php


use App\Http\Controllers\extracurricularController;
use App\Http\Controllers\StudentController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/hello', function () {
    return 'Hello World !';
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Danish Ardiyanta Rizqy Pramuditya",
        "kelas" => "11 PPLG 1",
        "image" => "image/arimage.png",
    ]);
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);

Route::get('/users', function (Request $request) {
    return $request;
});


Route::get('/users/{user:email}', function (User $user) {
    return $user->email;
});
