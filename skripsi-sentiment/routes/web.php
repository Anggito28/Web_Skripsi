<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSelebController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\PreprocessingController;
use App\Http\Controllers\TestingDataController;
use App\Http\Controllers\TfIdfController;
use App\Http\Controllers\TrainingDataController;
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

// Route::get('/', function () {
//     return view('main');
// });

// Route::get('home', function () {
//     return view('main');
// });

Route::get('sign-in', function () {
    return view('sign-in');
});

Route::get('sign-up', function () {
    return view('sign-up');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('klasifikasi', function () {
    return view('klasifikasi');
});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/preprocessing', [PreprocessingController::class, 'index']);
Route::get('/testing', [TestingDataController::class, 'index']);
Route::get('/training', [TrainingDataController::class, 'index']);
Route::get('/tf_idf', [TfIdfController::class, 'index']);
Route::resource('/seleb', DataSelebController::class);
Route::resource('/klasifikasi', KlasifikasiController::class);

// Route::get('data_seleb', function () {
//     return view('dataInput');
// });

Route::get('newdata', function () {
    return view('newData');
});
