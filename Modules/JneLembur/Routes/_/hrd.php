<?php

use Illuminate\Support\Facades\Route;
use Modules\JneLembur\Http\Controllers\hrd\LaporanLemburController;
use Modules\JneLembur\Http\Controllers\hrd\LaporanSelesaiController;

Route::prefix('hrd')->middleware('can:JneLembur-HRD')->group(function(){
    Route::get('laporan-lembur',[ LaporanLemburController::class,'index']);
    Route::get('laporan-lembur/{laporan}',[ LaporanLemburController::class,'show']);
    Route::put('laporan-lembur/{laporan}',[LaporanLemburController::class, 'update']);
    Route::get('laporan-selesai',[LaporanSelesaiController::class, 'index']);
    Route::get('laporan-selesai/{laporan}',[LaporanSelesaiController::class, 'show']);
});
