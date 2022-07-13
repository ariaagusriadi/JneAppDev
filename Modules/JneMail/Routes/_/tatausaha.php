<?php

use Illuminate\Support\Facades\Route;
use Modules\JneMail\Http\Controllers\Tatausaha\HistoryMailController;
use Modules\JneMail\Http\Controllers\TataUsaha\InboxController;
use Modules\JneMail\Http\Controllers\Tatausaha\SentMailController;

Route::prefix('tata-usaha')->middleware('can:JneMail-tatausaha')->group(function () {
    Route::put('tolak-inbox/{inbox}',[InboxController::class,'tolakinbox']);
    Route::resource('inbox', InboxController::class)->only([
        'index', 'show' , 'update'
    ]);
    Route::resource('sent-mail',SentMailController::class)->only([
        'index', 'show'
    ]);
    Route::resource('history-mail',HistoryMailController::class)->only([
        'index', 'show'
    ]);
});
