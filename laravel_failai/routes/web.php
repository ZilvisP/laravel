<?php
use App\Http\Controllers\Admin\AddressesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\PersonsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\StatusesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsPersonnel;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    Route::get('/', HomeController::class)->name('home');
    Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/category/{category:slug}', [CategoriesController::class, 'show'])->name('category.show');

    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', [CartController::class, 'show'])->name('order.cart');
        Route::post('product/add', [CartController::class, 'create'])->name('product.add_to_cart');
        Route::post('product/{product}/update', [CartController::class, 'update'])->name('cart.product_update');
        Route::delete('product/{product}/delete', [CartController::class, 'destroy'])->name('cart.product_remove');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', IsPersonnel::class]], function () {
        Route::get('/', DashBoardController::class)->name('dashboard');
        Route::delete('/product/file/{file}', [ProductsController::class, 'destroyFile'])->name('product.destroy-file');
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
