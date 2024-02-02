<?php

use App\Http\Controllers\web\FishController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| All fish web routes
|
*/

Route::prefix('/fish')->name('fish.')->controller(FishController::class)->group(function() {

    Route::get('/list', 'list')->name('list');

    Route::get('/find', 'find')->name('find');

    Route::put('/', 'store')->name('store');

    Route::patch('/', 'update')->name('update');

    Route::delete('/', 'destroy')->name('destroy');

});
