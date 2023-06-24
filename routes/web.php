<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::group(['middleware' => 'auth'], function () {
Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/kelola-tugas', function () {
    return view('kelola-tugas');
})->name('kelola-tugas');

Route::get('/buat-tugas', function () {
    return view('buat-tugas');
})->name('buat-tugas');

Route::get('/siswa', function () {
    return view('siswa');
})->name('siswa');

Route::get('/analisis-siswa', function () {
    return view('analisis-siswa');
})->name('analisis-siswa');

Route::get('/edit-profile', function () {
    return view('edit-profile');
})->name('edit-profile');


// });
