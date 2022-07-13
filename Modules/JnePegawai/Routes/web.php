<?php

use Illuminate\Support\Facades\Route;
use Modules\JnePegawai\Http\Controllers\JnePegawaiController;

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


Route::middleware('auth')->group(function () {
    Route::redirect('/jne/pegawai','/jnepegawai/dashboard');
    Route::prefix('jnepegawai')->middleware('can:Jne-pegawai')->group(function() {
        Route::get('dashboard',[ JnePegawaiController::class,'dashboard']);
        Route::get('setting',[ JnePegawaiController::class,'setting']);
        Route::get('setting/{pegawai}/edit',[ JnePegawaiController::class,'edit']);
        Route::put('setting/{pegawai}',[ JnePegawaiController::class,'update']);
    });
});
