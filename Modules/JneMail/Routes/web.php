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
    Route::redirect('JneMail/unit','jnemail/unit-kerja/send-mail');
    Route::redirect('JneMail/tatausaha','jnemail/tata-usaha/inbox');
    Route::redirect('JneMail/Jr-SuperVisior-Devisi-Operasional','jnemail/jr-supervisior-devisi-operasional/inbox-mail');
    Route::redirect('JneMail/Jr-SuperVisior-Devisi-Keuangan','jnemail/jr-supervisior-devisi-keuangan/inbox-mail');
    Route::redirect('JneMail/kepalacabang','jnemail/kepala-cabang/inbox-mail');
    Route::redirect('JneMail/custumerservice','jnemail/custumer-service/inbox-mail');
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
