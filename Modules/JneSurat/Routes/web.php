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


Route::middleware('auth')->group(function () {
    Route::get('jnesurat/unit',fn () => redirect('jnesurat/unit-kerja/pengajuan-baru'));
    Route::get('JneSurat/tatausaha',fn () => redirect('jnesurat/tata-usaha/pengajuan-masuk'));
    Route::get('JneSurat/ceo',fn () => redirect('jnesurat/ceo/pengajuan-masuk'));
    Route::prefix('jnesurat')->group(function () {
        include '_/unitkerja.php';
        include '_/tatausaha.php';
        include '_/ceo.php';
    });
});
