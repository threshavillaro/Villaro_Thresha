<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController; // <- FIXED namespace

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);

