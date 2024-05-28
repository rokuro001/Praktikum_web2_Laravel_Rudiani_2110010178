<?php

use App\Http\Controllers\PendudukController;
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

// Route::get('/penduduk', function () {
//     return view('penduduk.penduduk');
// })->name('datapenduduk');
Route::resource('penduduk', PendudukController::class);

Route::get('/sembako', function () {
    return view('sembako.sembako');
})->name('datasembako');

Route::get('/tunai', function () {
    return view('tunai.tunai');
})->name('datablt');

Route::get('/rumah', function () {
    return view('rumah.rumah');
})->name('bedahrumah');
