<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;


Route::middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes protégées par authentification
Route::middleware(['auth'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Projects & Skills
    Route::resource('projects', ProjectController::class);
    Route::resource('skills', SkillController::class)->except(['show', 'edit', 'update']);

    // PDF generation
    Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');
});

require __DIR__.'/auth.php';
