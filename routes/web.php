<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\Kasus2Controller;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\KasusController;


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




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('provinsi', ProvinsiController::class);
Route::resource('kota', KotaController::class);
Route::resource('kecamatan', KecamatanController::class);
Route::resource('kelurahan', KelurahanController::class);
Route::resource('rw', RwController::class);
Route::resource('kasus2', Kasus2Controller::class);
Route::resource('country', CountryController::class);
Route::resource('kasus', KasusController::class);
Route::get('utama', function(){
    return view('utama');
});
