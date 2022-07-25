<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('JneMail/unit',fn () => redirect('jnemail/unit-kerja/send-mail'));
    Route::get('JneMail/tatausaha',fn () => redirect('jnemail/tata-usaha/inbox'));
    Route::get('JneMail/Jr-SuperVisior-Devisi-Operasional',fn () => redirect('jnemail/jr-supervisior-devisi-operasional/inbox-mail'));
    Route::get('JneMail/Jr-SuperVisior-Devisi-Keuangan',fn () => redirect('jnemail/jr-supervisior-devisi-keuangan/inbox-mail'));
    Route::get('JneMail/kepalacabang',fn () => redirect('jnemail/kepala-cabang/inbox-mail'));
    Route::get('JneMail/custumerservice',fn () => redirect('jnemail/custumer-service/inbox-mail'));
    Route::prefix('jnemail')->group(function () {
        include '_/unitkerja.php';
        include '_/tatausaha.php';
        // distribusi surat
        include '_/DistribusiSurat/JrSuperVisior/DevisiOperasional.php';
        include '_/DistribusiSurat/JrSuperVisior/DevisiKeuangan.php';
        include '_/DistribusiSurat/KepalaCabang.php';
        include '_/DistribusiSurat/CustumerService.php';
    });
});
