<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\extracurricularController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Page",
        "nama" => "Danish Ardiyanta Rizqy Pramuditya",
        "kelas" => "11 PPLG 1",
        "image" => "image/arimage.png",
    ]);
});

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);

Route::get('/users', function (Request $request) {
    return $request;
});

Route::group(["prefix" => "/student"], function (){
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/filter/{id}', [StudentController::class, 'filter']);
    Route::get('/detail/{student}', [StudentController::class, 'show']);
});

Route::group(["prefix" => "/kelas"], function (){
    Route::get('/', [KelasController::class, 'index']);
});

Route::group(["prefix" => "/auth"], function (){
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');;
    Route::post('/login', [LoginController::class, 'auth']);
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/logout', [LogoutController::class, 'logout'])->middleware('auth');
});

Route::group(["prefix" => "/dashboard"], function (){
    Route::middleware('auth')->group(function () {
        Route::group(["prefix" => "/student"], function () {
            Route::get('/', [StudentController::class, 'index']);
            Route::get('/filter/{id}', [StudentController::class, 'filter']);
            Route::get('/detail/{student}', [StudentController::class, 'show']);
            Route::get('/create', [StudentController::class, 'create']);
            Route::get('/edit/{student}', [StudentController::class, 'edit']);
            Route::post('/add', [StudentController::class, 'store']);
            Route::post('/update/{student}', [StudentController::class, 'update']);
            Route::delete('/delete/{student}', [StudentController::class, 'destroy']);
        });

        Route::group(["prefix" => "/kelas"], function () {
            Route::get('/', [KelasController::class, 'index']);
            Route::get('/create', [KelasController::class, 'create']);
            Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
            Route::post('/add', [KelasController::class, 'store']);
            Route::post('/update/{kelas}', [KelasController::class, 'update']);
            Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
        });
    });
});


Route::get('/users/{user:email}', function (User $user) {
    return $user->email;
});
