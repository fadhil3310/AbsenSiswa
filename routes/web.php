<?php

use App\Http\Controllers\GuruController;
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
    return view('dashboardabc');
});


// Manjemen data
Route::resource('datasiswa', 'App\Http\Controllers\SiswaController');
Route::resource('dataguru', 'App\Http\Controllers\GuruController');


Route::get('/kelasx', function () {
    return view('kelasx');
});

Route::get('/kelasxi', function () {
    return view('kelasxi');
});

Route::get('/kelasxii', function () {
    return view('kelasxii');
});

Route::get('/jak', function () {
    return view('jak');
});

Route::get('/jtkj', function () {
    return view('jtkj');
});

Route::get('/jrpl', function () {
    return view('jrpl');
});


