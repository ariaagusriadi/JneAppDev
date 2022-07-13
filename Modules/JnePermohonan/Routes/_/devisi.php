<?php

use Illuminate\Support\Facades\Route;
use Modules\JnePermohonan\Http\Controllers\Devisi\PengajuanController;

Route::prefix('devisi')->middleware('can:JnePermohonan-devisi')->group(function () {
    Route::get('pengajuan-baru', [PengajuanController::class, 'index']);
    Route::get('pengajuan-baru/create', [PengajuanController::class, 'create']);
});
