<?php

use Illuminate\Support\Facades\Route;
use Modules\JneMail\Http\Controllers\UnitKerja\HistoryMailController;
use Modules\JneMail\Http\Controllers\UnitKerja\InboxMailController;
use Modules\JneMail\Http\Controllers\UnitKerja\SendMailController;
use Modules\JneMail\Http\Controllers\UnitKerja\SentMailController;

Route::prefix('unit-kerja')->middleware('can:JneMail-unit')->group(function () {
    Route::resource('send-mail', SendMailController::class);
    Route::resource('sent-mail', SentMailController::class)->only([
        'index', 'show'
    ]);
    Route::resource('history-mail', HistoryMailController::class)->only([
        'index' , 'show'
    ]);
    Route::resource('inbox-mail', InboxMailController::class)->only([
        'index', 'show'
    ]);
});
