<?php

use Illuminate\Support\Facades\Route;
use Modules\JneSurat\Http\Controllers\TataUsaha\FormatSuratController;
use Modules\JneSurat\Http\Controllers\TataUsaha\PengajuanAktifController;
use Modules\JneSurat\Http\Controllers\TataUsaha\PengajuanMasukController;
use Modules\JneSurat\Http\Controllers\TataUsaha\PengajuanSelesaiController;
use Modules\JneSurat\Http\Controllers\TataUsaha\RiwayatPengajuanController;

Route::prefix('tata-usaha')->middleware('can:JneSurat-tatausaha')->group(function () {
    Route::put('tolak-pengajuan/{pengajuan_masuk}', [PengajuanMasukController::class, 'tolakpengajuan']);
    Route::resource('pengajuan-masuk', PengajuanMasukController::class)->only([
        'index', 'show', 'update'
    ]);
    Route::resource('pengajuan-aktif', PengajuanAktifController::class)->only([
        'index', 'show'
    ]);
    Route::resource('pengajuan-selesai', PengajuanSelesaiController::class)->only([
        'index', 'show'
    ]);
    Route::resource('riwayat-pengajuan', RiwayatPengajuanController::class)->only([
        'index', 'show'
    ]);
    Route::resource('format-draft', FormatSuratController::class);
});
