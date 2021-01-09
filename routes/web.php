<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'Details']);

Route::get('/addproduct',[ProductController::class, 'Addproduct']);
Route::post('/addproduct',[ProductController::class, 'store'])->name('product.store');
route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
route::get('/edit/{id}', [ProductController::class, 'edit']);
route::get('/delete/{id}', [ProductController::class, 'delete']);

route::get("/search",[ProductController::class, 'search']);

route::post('/addtocart',[ProductController::class, 'addtocart']);

route::get('/cartItem',[ProductController::class, 'cartItem']);
route::get('/cartlist',[ProductController::class, 'getcartitem']);

route::get('/remove/{id}', [ProductController::class, 'removecart']);

route::get('/order', [OrderController::class, 'order']);

route::post('/orderp', [OrderController::class, 'finalorder'])->name('order.place');
route::get('/pending', [OrderController::class, 'pending']);

route::get('/destroycart', [ProductController::class, 'destroycart']);