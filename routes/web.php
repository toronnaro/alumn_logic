<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;

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

Route::resource('siswa', SiswaController::class)->middleware('auth');

Route::resource('guru', GuruController::class)->middleware('auth');

// Route::get('/', function () {
//     return view('master.home');
// });

Route::get('/', function () {
    return view('dashboard.main');
})->middleware('auth');

Route::get('/login', function () {
    return view('login.login');
})->middleware('auth');

Route::get('/tentangsekolah', function () {
    return view('dashboard.tentangsekolah');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Register - Create User
Route::post('/register', [RegisterController::class, 'store']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Login - Authentication
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);
