<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.index');
Route::get('/search', [HomeController::class, 'search'])->name('search.index');

//customer route
Route::group(['prefix' => 'customer'], function() {
    Route::get('login', [HomeController::class, 'login'])->name('customer.login');
    Route::post('login', [HomeController::class, 'check_login']);

    Route::get('register', [HomeController::class, 'register'])->name('customer.register');
    Route::post('register', [HomeController::class, 'check_register']);

    Route::get('account', [HomeController::class, 'account'])->name('customer.account');
    Route::post('account', [HomeController::class, 'edit_info']); 

    Route::get('edit_password', [HomeController::class, 'edit_password'])->name('customer.edit_password');
    Route::post('edit_password', [HomeController::class, 'edit_password']);   

    Route::get('logout', [HomeController::class, 'logout'])->name('customer.logout');
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{product}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{id}/{color}/{size}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{product}',[CartController::class,'update'])->name('cart.update');
    Route::get('clear',[CartController::class,'clear'])->name('cart.clear');
});

Route::group(['prefix' => 'order', 'middleware' => 'cus'], function() {
    Route::get('checkout',[HomeController::class,'checkout'])->name('order.checkout');
    Route::post('checkout',[HomeController::class,'post_checkout']);
    Route::get('order-history',[HomeController::class,'order_history'])->name('order.order_history');
    Route::get('order-pdf/{order}',[HomeController::class,'order_pdf'])->name('order.order_pdf');
});

Route::group(['prefix' => 'favourite'], function() {
    Route::get('index',[FavouriteController::class,'index'])->name('favourite.index');
    Route::get('add/{product}',[FavouriteController::class,'add'])->name('favourite.add');
    Route::delete('destroy/{product}',[FavouriteController::class,'destroy'])->name('favourite.destroy');
    Route::get('clear',[FavouriteController::class,'clear'])->name('favourite.clear');
});

Route::get('/dm/{category}-{slug}', [HomeController::class, 'categoryDetail'])->name('home.categoryDetail');
Route::get('/sp/{product}-{slug}', [HomeController::class, 'productDetail'])->name('home.productDetail');

// Admin router
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'check_login']);

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('', [AdminController::class, 'index'])->name('admin.index');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'user' => UserController::class,
        'banner' => BannerController::class,
        'blog' => BlogController::class,
        'color' => ColorController::class,
        'size' => SizeController::class,
    ]);

});