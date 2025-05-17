<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminCertificateController;

// Public Routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/projects', [PortfolioController::class, 'index'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'sendContact']);
Route::get('/projects/{portfolioItem}', [PortfolioController::class, 'show'])->name('projects.show');
Route::get('/certificates', [PortfolioController::class, 'certificates'])->name('certificates');
// Authentication Routes (Login/Register)
require __DIR__ . '/auth.php';

// Authenticated + Verified User Routes
// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Password
    Route::put('/password/update', [ProfileController::class, 'password'])
        ->name('password.update');
});
// Admin Dashboard Route
Route::middleware(['auth', 'verified', 'admin'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
// Admin Routes 
Route::middleware(['auth', 'verified', 'admin']) // Add your admin middleware
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Portfolio/project Management
        Route::resource('portfolio', AdminPortfolioController::class)->parameters([
            'portfolio' => 'portfolioItem'
        ]);

        // Certificate Management
        Route::resource('certificates', AdminCertificateController::class);
    });
// In web.php
