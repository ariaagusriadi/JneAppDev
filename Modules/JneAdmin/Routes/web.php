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
    Route::redirect('jne/admin','jneadmin/pegawai');
    Route::prefix('jneadmin')->middleware('can:JneAdmin-admin')->group(function () {
        include "_/pegawai.php";
        include "_/unitkerja.php";
        include "_/module.php";
    });
});
