<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);

    Route::get('/dashboard', function () {
        return view('dashboard', []);
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

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/logout', [SessionsController::class, 'destroy']);

    Route::get('/login', function () {
        return redirect('dashboard');
    });

    // Route::get('/home', function () {
    //     return redirect('dashboard');
    // });
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::get('/home', function () {
        return redirect('login');
    });
    Route::post('/login', [SessionsController::class, 'store']);
});

// Route::get('/login', function () {
//     return view('guest.login');
// })->name('login');
