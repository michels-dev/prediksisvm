<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

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

// halaman utama prediksi svm
Route::get('/stroke',[PrediksiController::class, 'index'])->name('stroke');

// delete data
Route::get('/delete/{id}',[PrediksiController::class, 'delete'])->name('delete');
