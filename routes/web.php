<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route; 


// Home
Route::get('/', [HomeController::class,'index']);
Route::get('/prestasi/{id}', [HomeController::class,'detailPrestasi'])->name('detail.prestasi');
Route::get('/publikasi/{id}', [HomeController::class,'detailPublikasi'])->name('detail.publikasi');
Route::get('/profile', [HomeController::class,'profile']);
Route::get('/fasilitas', [HomeController::class,'fasilitas']);
Route::get('/ekstrakurikuler', [HomeController::class,'ekstrakurikuler']);
Route::get('/publikasi', [HomeController::class,'publikasi']);
Route::get('/kontak', [HomeController::class,'kontak']);
Route::get('/ppdb', [HomeController::class,'ppdb']);


// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('/admin')->middleware('auth')->group(function() {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('news', NewsController::class);
    Route::resource('achievements', AchievementController::class);
    Route::resource('extracurriculars', ExtracurricularController::class);
    Route::resource('facilities', FacilityController::class);

    route::get('profile', [ProfileController::class, 'index']);
    route::put('profile/{id}', [ProfileController::class, 'update']);

    route::get('ppdb', [PpdbController::class, 'index']);
    route::put('ppdb/{id}', [PpdbController::class, 'update']);

});

