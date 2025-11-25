<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin login / logout (session-based)
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Group admin: session check ada di AdminController, jadi tidak perlu admin.check
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // CRUD: services & products
    Route::resource('services', ServiceController::class)->names('admin.services');
    Route::resource('products', ProductController::class)->names('admin.products');
});

// ADMIN PRODUCT CRUD (duplikasi — aman tapi sebenarnya tidak perlu)
Route::prefix('admin')->group(function () {
    
    Route::get('/products/{product}', [ProductController::class, 'show'])
     ->name('product.detail');


    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');

    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('admin.products.store');

    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');

    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::delete('/admin/products/image/{image}', [ProductController::class, 'deleteImage'])
    ->name('admin.products.image.delete');

// HOME + PRODUCT LIST
Route::get('/', function () {
    $products = Product::latest()->get(); // ambil semua produk dari database
    return view('home', compact('products'));
})->name('home');

// PRODUCT DETAIL PAGE
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

});

Route::get('/', [HomeController::class, 'index'])->name('home');


// Home page
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
