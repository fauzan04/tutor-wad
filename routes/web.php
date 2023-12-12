<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return '<h1>selamat belajar laravel 10';
});

Route::get('/about', function () {
});


Route::get('/hasil', function () {
    return 2 * 5;
});

Route::get('/beritaapa', function () {
    return view('beritaapa');
});

Route::get('/info', function () {
    return view('infotahunbaru.info');
});

Route::get('/beritabaru', function () {
    return view('infotahunbaru.beritabaru', ['judul' => 'Sebentar Lagi Tahun Baru Ya Kan ??']);
});

Route::get('/beritabaru2', function () {
    return view('infotahunbaru.beritabaru2', [
        'judul' => 'Sebentar Lagi Tahun Baru Ya Kan ??',
        'tanggal' => date('d-m-y'),
    ]);
});

Route::get('/user', [UserController::class, 'index']);
