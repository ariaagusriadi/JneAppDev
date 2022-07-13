<?php

use Illuminate\Support\Facades\Route;
use Modules\JneAdmin\Http\Controllers\PegawaiController;

Route::resource('pegawai', PegawaiController::class);
