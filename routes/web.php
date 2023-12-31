<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Materi;

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
    Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/kelola-pembelajaran', function () {
        return view('kelola-pembelajaran', [
            'materi' => Materi::all()
        ]);
    })->name('kelola-pembelajaran');

    Route::get('/buat-materi', function () {
        return view('buat-materi');
    })->name('buat-materi');

    Route::get('/materi/{id}', function ($id) {
        return view('materi', [
            'materi' => Materi::find($id),
        ]);
    });

    Route::get('/edit-materi/{id}', function ($id) {
        return view('buat-materi', [
            'materi' => Materi::find($id),
        ]);
    });

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

    Route::post('/edit-profile', [UserController::class, 'profileUpdate']);
    Route::post('/buat-materi', [MateriController::class, 'create']);
    Route::post('/edit-materi/{id}', [MateriController::class, 'edit']);
    Route::delete('/delete-materi/{id}', [MateriController::class, 'delete']);

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
