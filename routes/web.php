<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('answers', AnswerController::class);