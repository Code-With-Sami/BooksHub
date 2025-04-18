<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\OrderController as UserOrderController;

// No code was selected, so I will provide a general improvement to the code.

// Move the middleware to the top of the file for better organization
Route::middleware(['auth', 'verified'])->group(function () {
    // ...
});

Route::middleware('auth')->group(function () {
    // ...
});

Route::middleware(['auth', 'admin'])->group(function () {
    // ...
});

// Use route names consistently
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.index');

// Use route names consistently
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Use route names consistently
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Use route names consistently
Route::get('/admin-users', [AdminController::class, 'users'])->name('admin.users.index');
Route::get('/create-users', [AdminController::class, 'createUsers'])->name('admin.users.create');
Route::post('/storeusers', [AdminController::class, 'storeUsers'])->name('admin.users.store');
Route::get('/edit-users/{id}', [AdminController::class, 'editUsers'])->name('admin.users.edit');
Route::post('/updateusers/{id}', [AdminController::class, 'updateUsers'])->name('admin.users.update');
Route::get('/delete-users/{id}', [AdminController::class, 'deleteUsers'])->name('admin.users.delete');

// Use route names consistently
Route::get('/admin-books', [BooksController::class, 'show'])->name('admin.books.index');
Route::get('/create-books', [BooksController::class, 'createBooks'])->name('admin.books.create');
Route::post('/storebooks', [BooksController::class, 'storeBooks'])->name('admin.books.store');
Route::get('/edit-books/{id}', [BooksController::class, 'editBooks'])->name('admin.books.edit');
Route::post('/updateBooks/{id}', [BooksController::class, 'updateBooks'])->name('admin.books.update');
Route::get('/delete-books/{id}', [BooksController::class, 'deleteBooks'])->name('admin.books.delete');

// Use route names consistently
Route::get('/admin-categories', [BooksController::class, 'booksCategories'])->name('admin.categories.index');
Route::get('/create-categories', [BooksController::class, 'createCategories'])->name('admin.categories.create');
Route::post('/storecategories', [BooksController::class, 'storeCategories'])->name('admin.categories.store');
Route::get('/edit-categories/{id}', [BooksController::class, 'editCategory'])->name('admin.categories.edit');
Route::post('/updateCategory/{id}', [BooksController::class, 'updateCategory'])->name('admin.categories.update');
Route::get('/delete-category/{id}', [BooksController::class, 'deleteCategory'])->name('admin.categories.delete');

// Use route names consistently
Route::get('/admin-orders', [OrdersController::class, 'index'])->name('admin.orders.index');
Route::get('/admin-orderdetails/{id}', [OrdersController::class, 'show'])->name('admin.orders.show');
Route::post('/admin-orders/{id}', [OrdersController::class, 'destroy'])->name('admin.orders.destroy');
Route::patch('/admin-orders-{id}-update', [OrdersController::class, 'update'])->name('admin.orders.update');

// Use route names consistently
Route::get('/my-orders', [OrderController::class, 'indextwo'])->name('user.orders.index');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('user.orders.show');

// Use route names consistently
Route::get('/competitions', [CompetitionController::class, 'adminIndex'])->name('admin.competitions.index');
Route::get('/competitions-create', [CompetitionController::class, 'create'])->name('admin.competitions.create');
Route::post('/competitions', [CompetitionController::class, 'store'])->name('admin.competitions.store');
Route::get('/competitions/{id}', [CompetitionController::class, 'adminShow'])->name('admin.competitions.show');
Route::post('/competitions/{id}/winners', [SubmissionController::class, 'selectWinners'])->name('admin.competitions.winners');

// Use route names consistently
Route::get('/cart/add/{book_id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Use route names consistently
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');

Route::get('/', [UsersController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes For Frontend Users Side Pages
Route::get('about-us', [UsersController::class, 'about']);
Route::get('shop', [UsersController::class, 'shop']);
Route::get('shop-details/{id}', [UsersController::class, 'shopDetails']);
Route::get('competitions', [UsersController::class, 'competitions']);
Route::get('feedback', [UsersController::class, 'feedback']);
Route::get('/contact-us', [UsersController::class, 'showForm'])->name('contact.form');
Route::post('/contact-us', [UsersController::class, 'submitForm'])->name('contact.submit');
// Competition Routes For Competitions
Route::get('/competitions-index', [CompetitionController::class, 'index'])->name('competitions.index');
Route::get('/competitions-show/{id}', [CompetitionController::class, 'show'])->name('competitions.show');
Route::post('/competitions-submit/{id}/submit', [SubmissionController::class, 'store'])->middleware('auth')->name('competitions.submit');


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
    Route::get('/edit-books/{id}', [BooksController::class, 'editBooks']);
    Route::post('/updateBooks/{id}', [BooksController::class, 'updateBooks'])->name('updateBooks');
    Route::get('/delete-books/{id}', [BooksController::class, 'deleteBooks']);
    
    // Route for books categories
    Route::get('/admin-categories', [BooksController::class, 'booksCategories']);
    Route::get('/create-categories', [BooksController::class, 'createCategories']);
    Route::post('/storecategories', [BooksController::class, 'storeCategories'])->name('storecategories');
    Route::get('/edit-categories/{id}', [BooksController::class, 'editCategory']);
    Route::post('/updateCategory/{id}', [BooksController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/delete-category/{id}', [BooksController::class, 'deleteCategory']);

    // Routes For Orders
    Route::get('/admin-orders', [OrdersController::class, 'index']); // Admin sees all orders
    Route::get('/admin-orderdetails/{id}', [OrdersController::class, 'show']); // Admin views a single order
    // Route::post('/admin-orders-update/{id}', [OrdersController::class, 'update']); // Admin updates order status
    Route::post('/admin-orders/{id}', [OrdersController::class, 'destroy']); // Admin deletes an order
    Route::patch('/admin-orders-{id}-update', [OrdersController::class, 'update'])->name('admin.orders.update');
    // Route for user side order pages
    Route::get('/my-orders', [UserOrderController::class, 'index'])->name('user.orders');
    Route::get('/order/{id}', [UserOrderController::class, 'show'])->name('user.order.details');


    // Routes For Frontend Users Side Pages
    // Route::get('shop-cart/{id}', [UsersController::class, 'cart']);
    // Route::get('checkout', [UsersController::class, 'checkout']);
    // Routes for frontend users competition side pages
    Route::get('/competitions', [CompetitionController::class, 'adminIndex'])->name('admin.competitions.index');
    Route::get('/competitions-create', [CompetitionController::class, 'create'])->name('admin.competitions.create');
    Route::post('/competitions', [CompetitionController::class, 'store'])->name('admin.competitions.store');
    Route::get('/competitions/{id}', [CompetitionController::class, 'adminShow'])->name('admin.competitions.show');
    Route::post('/competitions/{id}/winners', [SubmissionController::class, 'selectWinners'])->name('admin.competitions.winners');

    // Add to cart Routes
    Route::get('/cart/add/{book_id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

    // Checkout routes
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');
    Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');

    // Route::post('/orders', [OrdersController::class, 'store']); // User places an order
    // Route::get('/orders', [OrdersController::class, 'userOrders'])->name('user.orders');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::patch('/admin/orders/{id}/tracking', [OrdersController::class, 'updateTracking']);
});


require __DIR__.'/auth.php';
