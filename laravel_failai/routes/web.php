<?php

use App\Http\Controllers\Admin\AddressesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PersonsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\StatusesController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;


//'as' neveikiantis budas priskirti pavadinima
//Route::get('/products', [ProductsController::class, 'index', 'as' => 'products.index']);

//Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
//Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
//Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
//Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');
//Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');
//Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
//Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');

//sutrumpintai laravelis sugeneruoja
//Route::resource('products', ProductsController::class);
Route::group(['middleware' => SetLocale::class], function () {
    Route::get('/', \App\Http\Controllers\HomeController::class);

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', DashboardController::class)->name('admin.dashboard');
        Route::resources([
            'products' => ProductsController::class,
            'categories' => CategoriesController::class,
            'persons' => PersonsController::class,
            'orders' => OrdersController::class,
            'statuses' => StatusesController::class,
            'addresses' => AddressesController::class,
            'users' => \App\Http\Controllers\Admin\UsersController::class]);
    });
});








