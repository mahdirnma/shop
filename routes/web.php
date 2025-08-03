<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::get('/products/category',[ProductController::class,'category'])->name('products.category');
Route::get('/products/category/create',[ProductController::class,'createCategory'])->name('products.category.create');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/category',[PostController::class,'category'])->name('posts.category');
Route::get('/posts/category/create',[PostController::class,'createCategory'])->name('posts.category.create');
