<?php

use App\Http\Controllers\Isiformulir;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/isi_formulir', [Isiformulir::class, 'index'])->name('isi_formulir');
Route::get('/tbh_pertanyaan1', [Isiformulir::class, 'tbh_pertanyaan1'])->name('tbh_pertanyaan1');
Route::get('/dlt_pertanyaan1', [Isiformulir::class, 'dlt_pertanyaan1'])->name('dlt_pertanyaan1');
