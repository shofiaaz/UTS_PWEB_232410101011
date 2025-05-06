<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginPost']) ->name('login.post');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/pengelolaan', [PageController::class, 'addCollectionForm'])->name('add.collection');
Route::post('/pengelolaan', [PageController::class, 'storeCollection'])->name('store.collection');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
