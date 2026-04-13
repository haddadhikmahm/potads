<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::get('/', function () {
    $events = \App\Models\Event::where('status', '!=', 'completed')->take(3)->get();
    $articles = \App\Models\Article::where('status', 'published')->latest()->take(3)->get();
    return view('welcome', compact('events', 'articles'));
})->name('home');

Route::get('/about', function () {
    return view('about-us');
})->name('about');

Route::get('/donations', [\App\Http\Controllers\DonationController::class, 'index'])->name('donations.index');
Route::post('/donations', [\App\Http\Controllers\DonationController::class, 'store'])->name('donations.store');

// Public Article Routes
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

// Public Event Routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

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
