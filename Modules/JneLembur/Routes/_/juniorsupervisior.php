<?php

use Illuminate\Support\Facades\Route;
use Modules\JneLembur\Http\Controllers\Juniorsupervisior\PengajuanLemburMasukController;
use Modules\JneLembur\Http\Controllers\Juniorsupervisior\PengajuanLemburSelesaiController;

Route::prefix('junior-supervisor')->middleware('can:JneLembur-junior-supervisor')->group(function () {
    Route::get('pengajuan-lembur-masuk', [PengajuanLemburMasukController::class, 'index']);
    Route::get('pengajuan-lembur-masuk/{lembur}', [PengajuanLemburMasukController::class, 'show']);
    Route::put('pengajuan-lembur-masuk/{lembur}', [PengajuanLemburMasukController::class, 'update']);
    Route::put('pengajuan-lembur-masuk/tolak/{lembur}', [PengajuanLemburMasukController::class, 'tolak']);
    Route::get('pengajuan-lembur-selesai', [PengajuanLemburSelesaiController::class, 'index']);
    Route::get('pengajuan-lembur-selesai/{laporan}', [PengajuanLemburSelesaiController::class, 'show']);
});
