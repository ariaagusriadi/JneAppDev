<?php

use Illuminate\Support\Facades\Route;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiKeuangan\HistoryMailController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiKeuangan\InboxController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiKeuangan\ReadMailController;

Route::prefix('jr-supervisior-devisi-keuangan')->middleware('can:JneMail-Jr-SuperVisior-Devisi-Keuangan')->group(function () {
    Route::put('inbox-mail/tandai-telah-dibaca/{inbox_mail}', [InboxController::class, 'read']);
    Route::resource('inbox-mail', InboxController::class)->only([
        'index', 'show', 'update'
    ]);
    Route::resource('history-mail', HistoryMailController::class)->only([
        'index', 'show'
    ]);
    Route::resource('read-mail', ReadMailController::class)->only([
        'index', 'show'
    ]);
});
