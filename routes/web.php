<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StoktokoController;

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


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name("login");
Route::middleware(['auth'])->group(function () {
    Route::resource('admin-product', ProductController::class);
    Route::resource('admin-category', KategoriController::class);
    Route::resource('admin-storage', StorageController::class);
    Route::resource('admin-store', StoktokoController::class);
    Route::get('/admin-dashboard', [AdminController::class, 'index']);
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/tentang-kami', [HomeController::class, 'tentang_kami']);
Route::get('/kontak-kami', [HomeController::class, 'kontak_kami']);
Route::get('/pembayaran', [HomeController::class, 'pembayaran']);
Route::get('/kebijakan', [HomeController::class, 'kebijakan']);
Route::get('/syarat', [HomeController::class, 'syarat']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/detail2/{id}', [HomeController::class, 'detail2']);
Route::get('/kategori/{id}', [HomeController::class, 'kategori']);
Route::get('/shop', [HomeController::class, 'shop']);