<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatannController;
use App\Http\Controllers\KantorrController;
use App\Http\Controllers\PendapatanaController;
use App\Http\Controllers\PotongannController;
use App\Http\Controllers\KaryawanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Tester Admin Templet
Route::get('tes-admin',function(){
    return view ('layouts.admin');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
    Route::get('/',function(){
        return view('admin.index');
    });
});
Route::resource('jabatan',JabatannController::class);
Route::resource('kantor',KantorrController::class);
Route::resource('potongan',PotongannController::class);
Route::resource('pendapatan',PendapatanaController::class);
Route::resource('user',UserssController::class);
Route::resource('userkaryawan',UserKaryawanController::class);
Route::resource('karyawan',KaryawanController::class);


