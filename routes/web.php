<?php

use App\Http\Controllers\product\DeleteProductController;
use App\Http\Controllers\product\EditProductController;
use App\Http\Controllers\product\GetProdcutController;
use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;



Route::get("/",[GetProdcutController::class,'index'])->name("get-product");

Route::get('/add-product',[ProductController::class,"index"])->name("add-product");
Route::post('/add-product',[ProductController::class,'create']);

Route::get("/edit-product/{id}",[EditProductController::class,'index'])->name("edit-product");
Route::post("/edit-product/{id}",[EditProductController::class,'update']);

Route::get("/delete-product/{id}",[DeleteProductController::class,'delete'])->name("delete-product");