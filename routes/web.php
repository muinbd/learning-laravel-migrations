<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [DemoController::class, 'article']);
Route::get('/articles', [DemoController::class, 'articles']);
