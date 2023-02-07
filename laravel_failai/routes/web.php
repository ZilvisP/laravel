<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', \App\Http\Controllers\HomeController::class);

//'as' neveikiantis budas priskirti pavadinima
//Route::get('/products', [ProductsController::class, 'index', 'as' => 'products.index']);
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');



Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, ' store']);
Route::get('/categories/{category}', [CategoriesController::class, 'show']);
Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit']);
Route::put('/categories/{category}', [CategoriesController::class, 'update']);
Route::delete('/categories/{category}', [CategoriesController::class, 'destroy']);

//sutrumpintai laravelis sugeneruoja
//Route::resource('products', ProductsController::class);

Route::resources([
    'persons' => \App\Http\Controllers\PersonsController::class,
    'orders' => \App\Http\Controllers\OrdersController::class,
    'statuses' => \App\Http\Controllers\StatusesController::class,
    'addresses' => \App\Http\Controllers\AddressesController::class,
    'users' => \App\Http\Controllers\UsersController::class
]);






