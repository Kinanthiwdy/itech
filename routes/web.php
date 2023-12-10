<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'authenticate'])->name('actionlogin');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');


Route::get('/bebas', function () {
    return view('bebas');
});


Route::get('/dashboard', [MahasiswaController::class, 'beranda'])->name('dashboard');
Route::get('/materibelajar', [MahasiswaController::class, 'materi'])->name('materi');
Route::get('/contact', [MahasiswaController::class, 'kontak'])->name('kontak');
Route::get('/quiz', [MahasiswaController::class, 'quiz'])->name('quiz');
Route::get('/biodata', [MahasiswaController::class, 'biodata'])->name('biodata');
Route::get('/dashadmin', [MahasiswaController::class, 'dashadmin'])->name('dashadmin');
Route::get('/loginmin', [MahasiswaController::class, 'showloginmin'])->name('loginmin');
Route::get('/profile', [MahasiswaController::class, 'profile'])->name('profile');

Route::post('/loginmin', [MahasiswaController::class, 'loginmin']);
Route::get('/dashadmin', function () {
    return 'Welcome to the dashboard';
})->middleware('auth');

Route::get('/formadmin/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/formadmin/update', [ProfileController::class, 'update'])->name('profile.update');


