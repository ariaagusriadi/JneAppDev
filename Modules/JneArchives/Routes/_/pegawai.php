<?php

use Illuminate\Support\Facades\Route;
use Modules\JneArchives\Http\Controllers\JneArchivesController;

Route::prefix('pegawai')->middleware('can:JneArchives-pegawai')->group(function () {
    Route::get('format-pengajuan' , [JneArchivesController::class, 'showpengajuan']);
    Route::get('format-persetujuan' , [JneArchivesController::class, 'showpersetujuan']);
});
