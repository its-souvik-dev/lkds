<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('candidate',CandidateController::class)->middleware(Auth::class);
Route::get('candidates/export', [App\Http\Controllers\CandidateController::class, 'export'])->middleware(Auth::class)->name('candidate.export');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
