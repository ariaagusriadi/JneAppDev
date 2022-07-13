<?php

use Illuminate\Support\Facades\Route;
use Modules\JneSurat\Http\Controllers\Ceo\PengajuanMasukController;
use Modules\JneSurat\Http\Controllers\Ceo\RiwayatPengajuanController;

Route::prefix('ceo')->middleware('can:JneSurat-ceo')->group(function () {
    Route::put('tolak-pengajuan/{pengajuan_masuk}', [PengajuanMasukController::class, 'tolakpengajuan']);
    Route::resource('pengajuan-masuk', PengajuanMasukController::class)->only([
        'index' , 'show' , 'update'
    ]);
    Route::resource('riwayat-pengajuan', RiwayatPengajuanController::class)->only([
        'index' , 'show'
    ]);
});
