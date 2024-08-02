<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| get , post , put , delete
*/
Route::resource('belajar', BelajarController::class);
Route::resource('user', UserController::class);
Route::resource('dashboard', DashboardController::class );
Route::resource('category', CategoryController::class );


Route::get('bagi', [\App\Http\Controllers\BelajarController::class, 'bagi']);
Route::post('store_bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store_bagi');
Route::get('kali', [\App\Http\Controllers\BelajarController::class, 'kali']);
Route::post('store_kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store_kali');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);
Route::post('store_kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_kurang');
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
Route::get('/', function () {
    return view('login');
});