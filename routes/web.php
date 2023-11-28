<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/bebas', function () {
    return view('bebas');
});


Route::get('/dashboard', [MahasiswaController::class, 'beranda'])->name('dashboard');
Route::get('/register', [MahasiswaController::class, 'register'])->name('register');
Route::get('/materibelajar', [MahasiswaController::class, 'materi'])->name('materi');
Route::get('/contact', [MahasiswaController::class, 'kontak'])->name('kontak');
Route::get('/quiz', [MahasiswaController::class, 'quiz'])->name('quiz');
Route::get('/biodata', [MahasiswaController::class, 'biodata'])->name('biodata');


