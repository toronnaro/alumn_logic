<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Models\User;

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

// CRUD SISWA
Route::resource('siswa', SiswaController::class)->middleware('auth');

// CRUD GURU
Route::resource('guru', GuruController::class)->middleware('auth');

// Dashboard View

Route::get('/main', function () {
    return view('dashboard.main');
})->middleware('auth');

// Penampil Halaman Login
Route::get('/login', function () {
    return view('login.login');
})->middleware('guest');

// View TentangSekolahs
Route::get('/tentangsekolah', function () {
    return view('dashboard.tentangsekolah');
})->middleware('auth');

// View Credit
Route::get('/credit', function () {
    return view('dashboard.credit', [
        'users' => User::all()
    ]);
});
// ->middleware('admin');


// Register - Create User
Route::post('/register', [RegisterController::class, 'store'])->name('register');


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Login - Authentication
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Landing Page
Route::get('/', function () {
    return view('landing.landing-page');
});
