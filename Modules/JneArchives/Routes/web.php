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

Route::prefix('jnearchives')->group(function() {
    Route::get('/', 'JneArchivesController@index');
});



Route::middleware('auth')->group(function () {
    Route::get('JneArchives/tatausaha',fn () => redirect('jnearchives/tata-usaha/format-pengajuan'));
    Route::get('JneArchives/pegawai',fn () => redirect('jnearchives/pegawai/format-pengajuan'));
    Route::prefix('jnearchives')->group(function () {
        include '_/tatausaha.php';
        include '_/pegawai.php';
    });
});
