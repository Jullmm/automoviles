<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomovilController;

Route::get('/', function () {
    return view('index');
});

Route::resource('automoviles', AutomovilController::class);

