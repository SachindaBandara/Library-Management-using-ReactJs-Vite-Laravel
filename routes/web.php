<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('index');
});

Route::get('/user-dashboard', function () {
    return view('user.userDashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user-dashboard', [NewsController::class, 'getNews'])->name('user.userDashboard');
});

Route::get('/admin-dashboard', [HomeController::class, 'index'])->
middleware(['auth', 'admin']);


Route::get('/admin-add-book', function () {
    return view('admin.addBook');
});



require __DIR__.'/auth.php';
