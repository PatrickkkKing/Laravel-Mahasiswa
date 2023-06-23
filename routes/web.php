<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('home');
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('home');
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('home');
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('home');
Route::patch('/mahasiswa/{id}/', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('home');
Route::delete('/mahasiswa/{id}/', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('home');
