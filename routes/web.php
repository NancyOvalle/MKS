<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\User\UsersController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("CheckAge");
Route::get('/home2', function () {return view('home2');})->name('home2');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("CheckRol");


//Controlador Producto
Route::post('/products',[ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products/store',[ProductsController::class, 'store'])->name('products.store');
Route::get('/products/show/{id}',[ProductsController::class, 'show'])->name('products.show');
Route::get('/products/edit/{id}',[ProductsController::class, 'edit'])->name('products.edit');
Route::delete('/products/destroy/{id}',[ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/products/cart',[ProductsController::class, 'cart'])->name('products.cart');
Route::get('/products/addtocart/{id}',[ProductsController::class, 'addtocart'])->name('products.addtocart');

//Controlador Usuario
Route::get('/users',[UsersController::class, 'index'])->name('users.index');
Route::get('/users/mujer',[UsersController::class, 'mujer'])->name('users.mujer');
Route::get('/users/niños',[UsersController::class, 'niños'])->name('users.niños');