<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('/category')->group(function() {
    Route::get('/list', [CategoryController::class,'index'])->name('category.index');
    Route::get('/show-form-add',[CategoryController::class, 'showFormAdd']);
    Route::post('/add',[CategoryController::class, 'add']);
    Route::get('/update/{id}', [CategoryController::class, 'showFormUpdate'])->name('category.form.update');
    Route::post('/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
});

Route::prefix('/product')->group(function(){
    Route::get('/list', [ProductController::class, 'index'])->name('product.index');
    Route::get('/show-form-add',[ProductController::class, 'showFormAdd']);
    Route::post('/add',[ProductController::class, 'add']);
    Route::get('/update/{id}', [ProductController::class, 'showFormUpdate'])->name('product.form.update');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
});
require __DIR__.'/auth.php';
