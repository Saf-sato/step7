<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    return view('welcome');
});
//ログイン画面　users/login
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

//新規登録画面 users/register
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');


Auth::routes();


// routes/web.php

