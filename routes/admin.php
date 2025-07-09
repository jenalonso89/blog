<?php

use App\Http\Controllers\TecnologiaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('tecnologias', TecnologiaController::class);
    Route::resource('post', \App\Http\Controllers\PostController::class);

});