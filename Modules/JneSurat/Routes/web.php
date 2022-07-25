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
    Route::redirect('jnesurat/unit','jnesurat/unit-kerja/pengajuan-baru');
    Route::redirect('JneSurat/tatausaha','jnesurat/tata-usaha/pengajuan-masuk');
    Route::redirect('JneSurat/ceo','jnesurat/ceo/pengajuan-masuk');
    Route::prefix('jnesurat')->group(function () {
        include '_/unitkerja.php';
        include '_/tatausaha.php';
        include '_/ceo.php';
    });
});
