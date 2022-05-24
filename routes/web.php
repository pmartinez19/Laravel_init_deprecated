<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Products;
use App\Http\Controllers\Login;
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



Route::get('/', [Home::class, 'index']);

Route::get('/login', [Login::class, 'login']);
Route::post('/loginUser', [Login::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [Login::class, 'logout_']);

Route::get('/register', [Login::class, 'register']);
Route::post('/registerUser', [Login::class, 'registerUser'])->name('registerUser');


Route::get('/user', [Home::class, 'user']);

Route::get('/products', [Products::class, 'products']);

//Route::get('/products/create', [Products::class, 'productCreate']);

Route::get('/products/{id}', [Products::class, 'productDetail']);

//Route::get('/products/{id}/edit', [Home::class, 'productEdit']);

Route::get('/home', [Home::class, 'home']);
