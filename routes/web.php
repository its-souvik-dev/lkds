<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('candidate',CandidateController::class);