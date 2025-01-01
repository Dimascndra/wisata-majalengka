<?php

use App\Http\Controllers\GrafikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesananController;
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

Route::get('/', function () {
    return view('home');
});
// set route untuk halaman daftar pesanan dan form pemesanan
Route::resource('/pesanan', \App\Http\Controllers\PesananController::class);

// set route untuk halaman grafik
Route::get('/grafik', [GrafikController::class, 'index'])->name('view.grafik');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/print-invoice/{id}', [PesananController::class, 'print'])->name('print.invoice');


// Rute untuk menghapus pesanan
Route::delete('/delete-pesanan/{id}', [PesananController::class, 'destroy']);

require __DIR__ . '/auth.php';
