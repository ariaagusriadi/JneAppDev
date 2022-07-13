<?php

use Illuminate\Support\Facades\Route;
use Modules\JneArchives\Http\Controllers\Tatausaha\PengajuanController;
use Modules\JneArchives\Http\Controllers\Tatausaha\PersetujuanController;

Route::prefix('tata-usaha')->middleware('can:JneArchives-tatausaha')->group(function () {
    Route::resource('format-pengajuan', PengajuanController::class);
    Route::resource('format-persetujuan', PersetujuanController::class);
});
