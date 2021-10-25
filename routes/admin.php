<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('',[AdminController::class, 'index']);

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('products', ProductController::class)->names('admin.products');