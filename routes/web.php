<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PelatihController;



Route::get('/', function () {
    return view('index');  // Memanggil file index.blade.php di folder resources/views
});

Route::get('/pelatih', [PelatihController::class, 'showPelatih'])->name('pelatih.show');  // Menampilkan pelatih di landing page


Route::get('/pemain', function () {
    return view('abouts_us.pemain');
});
Route::get('/jadwal_latihan', function () {
    return view('jadwal');
});

Route::get('/pemain', [PemainController::class, 'pemain'])->name('pemain');

// Rute untuk login (melalui route name)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Rute untuk logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/admin/akun/import', [AdminController::class, 'import'])->name('admin.akun.import');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    // Route untuk halaman akun
    Route::get('/admin/akun', [AdminController::class, 'akun'])->name('admin.akun');
    Route::post('/admin/akun/store', [AdminController::class, 'store'])->name('admin.akun.store');

    Route::put('/admin/akun/{user}', [AdminController::class, 'update'])->name('admin.akun.update');

    // Route untuk menghapus akun pemain
    Route::delete('/admin/akun/{user}', [AdminController::class, 'destroy'])->name('admin.akun.destroy');

    //Pelatih
    Route::get('/pelatihadmin', [PelatihController::class, 'index'])->name('pelatih.index');
    Route::post('/pelatihadmin', [PelatihController::class, 'store'])->name('pelatih.store');
});
