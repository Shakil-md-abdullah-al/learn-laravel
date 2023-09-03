<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/create', [HomeController::class,'create'])->name('create');
Route::get('/all-student', [HomeController::class,'allStudent'])->name('all.student');
Route::get('/edit/{id}', [HomeController::class,'edit'])->name('edit');
Route::get('/delete/{id}', [HomeController::class,'delete'])->name('delete');
Route::post('/update', [HomeController::class,'update'])->name('update');




Route::get('/category', [CategoryController::class,'index'])->name('category');
Route::post('/category-create', [CategoryController::class,'saveCategory'])->name('category.create');
Route::get('/all-category', [CategoryController::class,'allCategory'])->name('all.category');
Route::get('/status/{id}', [CategoryController::class,'status'])->name('status');

Route::get('/category-edit/{id}', [CategoryController::class,'editCategory'])->name('category.edit');

Route::post('/category-update', [CategoryController::class,'updateCategory'])->name('category.update');
//Route::get('/category-delete/{id}', [CategoryController::class,'deleteCategory'])->name('category.delete');
Route::post('/category-delete', [CategoryController::class,'deleteCategory'])->name('category.delete');



Route::get('/brand', [BrandController::class,'index'])->name('brand');
Route::get('/all-brand', [BrandController::class,'allBrand'])->name('all.brand');
Route::post('/brand-create', [BrandController::class,'saveBrand'])->name('brand.create');
Route::get('/status/{id}', [BrandController::class,'status'])->name('status');
Route::get('/brand-edit/{id}', [BrandController::class,'editBrand'])->name('brand.edit');
Route::post('/brand-update', [BrandController::class,'updateBrand'])->name('brand.update');
Route::post('/brand-delete', [BrandController::class,'deleteBrand'])->name('brand.delete');


Route::resource('products', ProductController::class);
