<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::get('/', function () {
    $events = \App\Models\Event::where('status', '!=', 'completed')->take(3)->get();
    $articles = \App\Models\Article::where('status', 'published')->latest()->take(3)->get();
    return view('welcome', compact('events', 'articles'));
});

Route::get('/donasi', [\App\Http\Controllers\DonationController::class, 'index'])->name('donations.index');
Route::post('/donasi', [\App\Http\Controllers\DonationController::class, 'store'])->name('donations.store');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
