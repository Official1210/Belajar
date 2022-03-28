<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TambahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dasboard', [
        "title" => "dasbord"
    ]);
});

Route::get('home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('login.index', function () {
    return view('login.index', [
        "title" => "Login"
    ]);
});

Route::get('profil', function () {
    return view('profil', [
        "title" => "Profil"
    ]);
});



Route::get('data2', function () {
    return view('data2', [
        "title" => "Data Wisuda"
    ]);
});

Route::get('calendar', function () {
    return view('calendar', [
        "title" => "Calender"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);
Route::get('/daftar.index', [DaftarController::class, 'index']);
Route::post('/post', [TambahController::class, 'index']);
