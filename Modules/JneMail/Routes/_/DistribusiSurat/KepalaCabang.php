<?php

use Illuminate\Support\Facades\Route;
use Modules\JneMail\Http\Controllers\DistribusiSurat\KepalaCabang\InboxController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\KepalaCabang\HistoryMailController;
use Modules\JneMail\Http\Controllers\DistribusiSurat\KepalaCabang\ReadMailController;

Route::prefix('kepala-cabang')->middleware('can:JneMail-kepalacabang')->group(function () {
    Route::put('inbox-mail/tandai-telah-dibaca/{inbox_mail}', [InboxController::class, 'read']);
        Route::resource('inbox-mail', InboxController::class)->only([
            'index' , 'show' , 'update'
        ]);
        Route::resource('history-mail', HistoryMailController::class)->only([
            'index' , 'show'
        ]);
        Route::resource('read-mail', ReadMailController::class)->only([
            'index', 'show'
        ]);
});
