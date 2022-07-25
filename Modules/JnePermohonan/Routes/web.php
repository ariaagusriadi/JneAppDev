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

Route::prefix('jnepermohonan')->group(function() {
    Route::get('/', 'JnePermohonanController@index');
});



Route::middleware('auth')->group(function () {
    Route::redirect('/JnePermohonan/devisi','jnepermohonan/devisi/pengajuan-baru');
    Route::prefix('jnepermohonan')->group(function () {
        include '_/devisi.php';
    });
});
