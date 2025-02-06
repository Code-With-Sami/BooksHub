<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes For Frontend Users Side Pages
Route::get('about-us', [UsersController::class, 'about']);
Route::get('shop', [UsersController::class, 'shop']);
Route::get('competitions', [UsersController::class, 'competitions']);
Route::get('feedback', [UsersController::class, 'feedback']);
Route::get('contact-us', [UsersController::class, 'contact']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);

    // Routes for Admins users side 
    Route::get('/admin-users', [AdminController::class, 'users']);
    Route::get('/create-users', [AdminController::class, 'createUsers']);
    Route::post('/storeusers', [AdminController::class, 'storeUsers'])->name('storeusers');
    Route::get('/edit-users/{id}', [AdminController::class, 'editUsers']);
    Route::post('/updateusers/{id}', [AdminController::class, 'updateUsers'])->name('updateusers');
    Route::get('/delete-users/{id}', [AdminController::class, 'deleteUsers']);
    
    // Routes For Products (Books)
    Route::get('/admin-books', [BooksController::class, 'show']);
    Route::get('/create-books', [BooksController::class, 'createBooks']);   
    Route::post('/storebooks', [BooksController::class, 'storeBooks'])->name('storebooks');
    
    // Route for books categories
    Route::get('/admin-categories', [BooksController::class, 'booksCategories']);
    Route::get('/create-categories', [BooksController::class, 'createCategories']);
    Route::post('/storecategories', [BooksController::class, 'storeCategories'])->name('storecategories');
    Route::get('/edit-categories/{id}', [BooksController::class, 'editCategory']);
    Route::post('/updateCategory/{id}', [BooksController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/delete-category/{id}', [BooksController::class, 'deleteCategory']);


    // Routes For Frontend Users Side Pages
    Route::get('cart', [UsersController::class, 'cart']);
    Route::get('checkout', [UsersController::class, 'checkout']);
});


require __DIR__.'/auth.php';
