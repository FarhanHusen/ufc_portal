<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\HealthAssessmentController;
use App\Http\Controllers\IndividualController;

Route::get('/', function () {
    return view('index');  // Memanggil file index.blade.php di folder resources/views
});

Route::get('/pelatih', [PelatihController::class, 'showPelatih'])->name('pelatih.show');  // Menampilkan pelatih di landing page
Route::get('/pemain', [PemainController::class, 'showpemain'])->name('pemain.show');

Route::get('/jadwal_latihan', function () {
    return view('jadwal');
});
<<<<<<< HEAD
=======
Route::get('/individual', function () {
    return view('layouts.user.individual');
});

Route::get('/pemain', [PemainController::class, 'pemain'])->name('pemain');

>>>>>>> 9935194e4db3d48a006b20a683e31f59da94cba6
// Rute untuk login (melalui route name)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Rute untuk logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/admin/akun/import', [AdminController::class, 'import'])->name('admin.akun.import');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('layouts.admin.admin');
    Route::get('/user', function () {
        return view('layouts.admin.admin');  // Memanggil file user.blade.php di folder resources/views
    });
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Route untuk halaman akun
    Route::get('/admin/akun', [AdminController::class, 'akun'])->name('admin.akun')->middleware('isadmin');
    Route::post('/admin/akun/store', [AdminController::class, 'store'])->name('admin.akun.store');
    Route::put('/admin/akun/{user}', [AdminController::class, 'update'])->name('admin.akun.update');
    // Route untuk menghapus akun pemain
    Route::delete('/admin/akun/{user}', [AdminController::class, 'destroy'])->name('admin.akun.destroy');
    //Pelatih
    Route::get('/pelatihadmin', [PelatihController::class, 'index'])->name('pelatih.index');
    Route::post('/pelatihadmin', [PelatihController::class, 'store'])->name('pelatih.store');
    //pemain
    Route::get('/pemainadmin', [PemainController::class, 'index'])->name('pemain.index');
    Route::post('/pemainadmin', [PemainController::class, 'store'])->name('pemain.store');
    //user
    Route::get('/user/editable', [IndividualController::class, 'editable'])->name('layouts.user.editable')->middleware('isadmin');
    Route::get('/user/individual', [IndividualController::class, 'individual'])->name('layouts.user.individual');
    //health
    Route::get('/health', [HealthAssessmentController::class, 'index'])->name('layouts.health.index')->middleware('isadmin');
    Route::get('/health/create', [HealthAssessmentController::class, 'create'])->name('health.create')->middleware('isadmin');
    Route::post('/health', [HealthAssessmentController::class, 'store'])->name('health.store');
    Route::get('/health/{id}/edit', [HealthAssessmentController::class, 'edit'])->name('layouts.health.edit');
    Route::put('/health/{id}', [HealthAssessmentController::class, 'update'])->name('layouts.health.update');
    Route::get('/healthy', [HealthAssessmentController::class, 'healthy'])->name('layouts.health.healthy');

});
