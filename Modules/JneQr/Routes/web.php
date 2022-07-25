<?php

use Illuminate\Support\Facades\Route;
use Modules\JneQr\Http\Controllers\JneQrController;
use Modules\JneQr\Http\Controllers\Lembur\PengajuanController;
use Modules\JneQr\Http\Controllers\Lembur\PersetujuanController;

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
    Route::prefix('jneqr')->middleware('can:Jne-Qr')->group(function() {
        Route::get('new-qr',[ JneQrController::class,'index']);
        Route::post('pengajuan-lembur',[PengajuanController::class,'generatelembur']);
        Route::post('pengajuan-barang',[PengajuanController::class,'generatebarang']);
        Route::post('persetujuan-lembur',[PersetujuanController::class,'generatelembur']);
        Route::post('persetujuan-barang',[PersetujuanController::class,'generatebarang']);
    });
});
