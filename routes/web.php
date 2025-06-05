<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('figure', [FigureController::class, 'index']);