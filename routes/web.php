<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('index');
});

// 'user (auth)' middleware group
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user-dashboard', [NewsController::class, 'getNews'])->name('user.userDashboard');
    Route::get('/admin-all-books', [BookController::class, 'getAllBooks'])->name('admin.allBooks');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 'admin' middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin-add-book', [BookController::class, 'getBooks'])->name('admin.addBook');
    Route::get('/admin-all-books', [BookController::class, 'getAllBooks'])->name('admin.allBooks');
});

require __DIR__.'/auth.php';
