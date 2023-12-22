<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\DashboardController;

Route::get('/',[DashboardController::class,'index']);


use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);



use App\Http\Controllers\GroupController;
Route::resource('group', GroupController::class);



use App\Http\Controllers\CategoryController;
Route::resource('category', CategoryController::class); 




use App\Http\Controllers\BrandController;

Route::resource('brand', BrandController::class); 




use App\Http\Controllers\StyleController;

Route::resource('style', StyleController::class); 




use App\Http\Controllers\SizeController;
Route::resource('size', SizeController::class); 




use App\Http\Controllers\ColorController;

Route::resource('color', ColorController::class); 




use App\Http\Controllers\UomController;

Route::resource('uom', UomController::class); 



use App\Http\Controllers\UomPopUpController;

Route::resource('uompop', UomPopUpController::class); 