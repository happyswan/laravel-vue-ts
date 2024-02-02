<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Main application routes
|
*/

Route::get('{any}', function () {
    return view('app');
})->where('any','.*');
