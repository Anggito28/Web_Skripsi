<?php

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
    return view('main');
});

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

Route::get('preprocessing', function () {
    return view('preprocessing');
});

Route::get('training', function () {
    return view('training');
});

Route::get('testing', function () {
    return view('testing');
});

Route::get('data_seleb', function () {
    return view('dataInput');
});

Route::get('newdata', function () {
    return view('newData');
});
