<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienControllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasienUserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// // Route::get('/daftar', function () {
// //     return view('daftar');
// // });

// Route::get('/detail_daftar', function () {
//     return view('detail_daftar');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });

// Route::get('/layanan', function () {
//     return view('layanan');
// });

// Route::get('/price', function () {
//     return view('price');
// });

// Route::get('/team', function () {
//     return view('team');
// });

// Route::get('/testimonial', function () {
//     return view('testimonial');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/dokter', function () {
//     return view('dokter');
// });
// Route::get('/homeAdmin', function () {
//     return view('homeAdmin');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('pas',PasienControllers::class);

// //Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index'])->name('pasien');

// Route::get('/user', [UserController::class, 'index'])->name('user');

// Route::get('/pasien', [PasienUserController::class, 'index'])->name('pasien');

//hak akses untuk admin
Route::group(['middleware' => 'admin'], function(){
    
});

Route::group(['middleware' => 'user'], function(){
    Route::get('/about', function () {
        return view('about');
    });
    
    // Route::get('/daftar', function () {
    //     return view('daftar');
    // });
    
    Route::get('/detail_daftar', function () {
        return view('detail_daftar');
    });
    
    Route::get('/kontak', function () {
        return view('kontak');
    });
    
    Route::get('/layanan', function () {
        return view('layanan');
    });
    
    Route::get('/price', function () {
        return view('price');
    });
    
    Route::get('/team', function () {
        return view('team');
    });
    
    Route::get('/testimonial', function () {
        return view('testimonial');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    Route::get('/dokter', function () {
        return view('dokter');
    });
    Route::resource('pas',PasienControllers::class);
});

Route::group(['middleware' => 'pasien'], function(){
    Route::get('/pasien', [PasienUserController::class, 'index'])->name('pasien');
});