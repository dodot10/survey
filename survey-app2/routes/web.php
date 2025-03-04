<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

// Middleware untuk autentikasi
// Route::middleware(['auth'])->group(function () {

//     // Dashboard User (Hanya bisa diakses oleh User)
//     Route::middleware(['role:user'])->group(function () {
//         Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     });

//     // Dashboard Admin (Sekarang menggunakan Filament)
//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/admin', function () {
//             return redirect('/admin'); // Redirect ke Filament
//         });
//     });
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
