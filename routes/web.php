<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Models\Service;

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



// HOME + PRODUCT LIST
Route::get('/', function () {
    $products = Product::latest()->get(); // ambil semua produk dari database
    $services = Service::latest()->get(); // ambil semua layanan dari database
    return view('home', compact('products'));
})->name('home');

// PRODUCT DETAIL PAGE
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::get('/', [HomeController::class, 'index'])->name('home');


// Home page
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
