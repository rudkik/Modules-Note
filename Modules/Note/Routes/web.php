<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/notes', [\Modules\Note\Http\Controllers\NotesController::class, 'showAll']);
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/notes', \Modules\Note\Http\Controllers\NotesController::class);
});

