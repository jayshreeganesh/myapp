<?php

/* use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);

