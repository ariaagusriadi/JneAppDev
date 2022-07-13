<?php

use Illuminate\Support\Facades\Route;
use Modules\JneLembur\Http\Controllers\kordinatorbidang\PengajuanLemburAktifController;
use Modules\JneLembur\Http\Controllers\kordinatorbidang\PengajuanLemburBaruController;
use Modules\JneLembur\Http\Controllers\KordinatorBidang\PengajuanLemburSelesaiController;

Route::prefix('kordinator-bidang')->middleware('can:JneLembur-kordinator-bidang')->group(function(){
    Route::resource('pengajuan-lembur-baru', PengajuanLemburBaruController::class);
    Route::get('pengajuan-lembur-aktif', [PengajuanLemburAktifController::class , 'index']);
    Route::get('pengajuan-lembur-aktif/{lembur}', [PengajuanLemburAktifController::class , 'show']);
    Route::put('pengajuan-lembur-aktif/{lembur}', [PengajuanLemburAktifController::class , 'update']);
    Route::get('pengajuan-lembur-selesai', [PengajuanLemburSelesaiController::class, 'index']);
    Route::get('pengajuan-lembur-selesai/{laporan}', [PengajuanLemburSelesaiController::class, 'show']);
});
