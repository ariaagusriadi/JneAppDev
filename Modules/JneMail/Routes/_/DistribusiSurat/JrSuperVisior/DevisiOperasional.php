<?php

use Illuminate\Support\Facades\Route;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiOperasional\HistoryMailController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiOperasional\InboxController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiOperasional\ReadMailController;

Route::prefix('jr-supervisior-devisi-operasional')->middleware('can:JneMail-Jr-SuperVisior-Devisi-Operasional')->group(function () {
        Route::put('inbox-mail/tandai-telah-dibaca/{inbox_mail}', [InboxController::class, 'read']);
        Route::resource('inbox-mail', InboxController::class)->only([
            'index' , 'show' , 'update'
        ]);
        Route::resource('history-mail', HistoryMailController::class)->only([
            'index' , 'show'
        ]);
        Route::resource('read-mail', ReadMailController::class)->only([
            'index' , 'show'
        ]);
});
