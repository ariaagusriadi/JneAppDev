<?php

use Illuminate\Support\Facades\Route;
use Modules\JneAdmin\Http\Controllers\ModuleController;


Route::post('module/add-role' , [ModuleController::class, 'addRole']);
Route::delete('module/delete-role/{role}', [ModuleController::class , 'deleteRole']);
Route::resource('module', ModuleController::class);
