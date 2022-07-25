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
    Route::redirect('JneLembur/kordinator-bidang', 'jnelembur/kordinator-bidang/pengajuan-lembur-baru');
    Route::redirect('JneLembur/junior-supervisor', 'jnelembur/junior-supervisor/pengajuan-lembur-masuk');
    Route::redirect('jnelembur/hrd', '/jnelembur/hrd/laporan-lembur');
    Route::prefix('jnelembur')->group(function () {
        include '_/kordinatorbidang.php';
        include '_/juniorsupervisior.php';
        include '_/hrd.php';
    });
});
