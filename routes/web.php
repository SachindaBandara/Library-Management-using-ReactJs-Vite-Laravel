<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsPaperController;




Route::get('/', function () {
    return view('index');
});

// 'user (auth)' middleware group
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user-dashboard', [NewsController::class, 'getNews'])->name('user_dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user-books', [BookController::class, 'getAllBooksUser'])->name('user_books');
});

// 'admin' middleware
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin-dashboard', [HomeController::class, 'index'])->name('admin_dashboard');

    Route::get('/admin-books', [BookController::class, 'getAllBooksAdmin'])->name('admin_books');
    Route::get('/admin-add-book', [BookController::class, 'addBookAdmin'])->name('admin_addBook');
    Route::post('/admin-add-book', [BookController::class, 'storeBookAdmin'])->name('admin_store_book');
    Route::get('/{book}/admin-edit-book', [BookController::class, 'editBookAdmin'])->name('admin_edit_book');
    Route::put('{book}/admin-update-book', [BookController::class, 'updateBookAdmin'])->name('admin_update_book');
    Route::delete('/{id}/admin-delete-book', [BookController::class, 'deleteBookAdmin'])->name('admin_delete_book');

    Route::get('/admin-users', [UserController::class, 'getAllUsersAdmin'])->name('admin_users');
    Route::get('/admin-add-users', [UserController::class, 'addUserAdmin'])->name('admin_addUser');
    Route::post('/admin-add-user', [UserController::class, 'storeUserAdmin'])->name('admin_store_user');
    Route::delete('/{id}/admin-delete-user', [UserController::class, 'deleteUserAdmin'])->name('admin_delete_user');

    Route::get('/admin-newspapers', [NewsPaperController::class, 'getAllNewsPapersAdmin'])->name('admin_newsPapers');
    Route::get('/admin-add-newspaper', [NewsPaperController::class, 'addNewsPaperAdmin'])->name('admin_addNewsPaper');
    Route::post('/admin-add-newspaper', [NewsPaperController::class, 'storeNewsPaperAdmin'])->name('admin_store_newsPaper');

});

require __DIR__.'/auth.php';

