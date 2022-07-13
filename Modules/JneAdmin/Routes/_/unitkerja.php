<?php

use Illuminate\Support\Facades\Route;
use Modules\JneAdmin\Http\Controllers\UnitKerjaController;

Route::resource('unit-kerja', UnitKerjaController::class);
