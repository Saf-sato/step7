<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SalesController;

Route::get('', function () {
    return view('welcome');
});
//ログイン画面　users/login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

//新規登録画面 users/register
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');


Auth::routes();


// routes/web.php

