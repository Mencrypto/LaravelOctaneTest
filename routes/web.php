<?php

use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;

Route::get('/', [PageController::class,'index'])->name('home');

Route::get('questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
