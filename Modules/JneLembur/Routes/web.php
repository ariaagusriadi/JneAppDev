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
    Route::get('JneLembur/kordinator-bidang',fn () => redirect('jnelembur/kordinator-bidang/pengajuan-lembur-baru'));
    Route::get('JneLembur/junior-supervisor',fn () => redirect('jnelembur/junior-supervisor/pengajuan-lembur-masuk'));
    Route::get('jnelembur/hrd',fn () => redirect('jnelembur/hrd/laporan-lembur'));
    Route::prefix('jnelembur')->group(function () {
        include '_/kordinatorbidang.php';
        include '_/juniorsupervisior.php';
        include '_/hrd.php';
    });
});
