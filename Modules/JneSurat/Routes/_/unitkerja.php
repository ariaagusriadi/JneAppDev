<?php

use Illuminate\Support\Facades\Route;
use Modules\JneSurat\Http\Controllers\UnitKerja\FormatSuratController;
use Modules\JneSurat\Http\Controllers\UnitKerja\PengajuanAktifController;
use Modules\JneSurat\Http\Controllers\UnitKerja\PengajuanBaruController;
use Modules\JneSurat\Http\Controllers\UnitKerja\PengajuanSelesaiController;
use Modules\JneSurat\Http\Controllers\UnitKerja\RiwayatPengajuanController;

Route::prefix('unit-kerja')->middleware('can:JneSurat-unit')->group(function () {
    Route::resource('pengajuan-baru', PengajuanBaruController::class);
    Route::resource('pengajuan-aktif', PengajuanAktifController::class)->only([
        'index', 'show'
    ]);
    Route::resource('pengajuan-selesai', PengajuanSelesaiController::class)->only([
        'index' , 'show'
    ]);
    Route::resource('riwayat-pengajuan', RiwayatPengajuanController::class)->only([
        'index' , 'show'
    ]);
    Route::resource('format-surat', FormatSuratController::class);
});
