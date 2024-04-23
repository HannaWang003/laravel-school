<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('titles', TitleController::class);
Route::resource('totals', TotalController::class);
Route::post('/update-titles', [TitleController::class, 'updateTitles'])->name('mytitles.update');
Route::get('/pb', [PageController::class, 'pb']);
