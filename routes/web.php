<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
});


// Manjemen data
Route::resource('datasiswa', 'App\Http\Controllers\SiswaController');
Route::resource('dataguru', 'App\Http\Controllers\GuruController');

//Route::get('/dashboard', function () { return redirect('/'); });

//Route::get('/inginlogout', 'App\Http\Controllers\AuthController@logout');

Route::get('/mapeldetail', 'App\Http\Controllers\KurikulumController@mapel_detail');
Route::get('/gurudetail', 'App\Http\Controllers\GuruController@guru_detail');
Route::get('/getdatagurumengajar', 'App\Http\Controllers\GuruMengajarController@get_data');


Route::resource('/datasiswa', "App\Http\Controllers\SiswaController")->middleware(['auth', 'verified']);
Route::resource('/datakelas', "App\Http\Controllers\KelasController")->middleware(['auth', 'verified']);
Route::resource('/dataguru', "App\Http\Controllers\GuruController")->middleware(['auth', 'verified']);
Route::resource('/datagurumengajar', "App\Http\Controllers\GuruMengajarController")->middleware(['auth', 'verified']);
Route::resource('/datajurusan', "App\Http\Controllers\JurusanController")->middleware(['auth', 'verified']);
Route::resource('/datakurikulum', "App\Http\Controllers\KurikulumController")->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
