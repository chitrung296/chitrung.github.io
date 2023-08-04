<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('product-list',[ProductController::class,'index']);
Route::get('product-add',[ProductController::class,'add']);
Route::post('product-save',[ProductController::class,'save']);
Route::get('product-delete/{id}',[ProductController::class,'delete']);
Route::get('product-edit/{id}', [ProductController::class, 'edit'] );
Route::post('product-update', [ProductController::class, 'update'] );

//admin dashboad
Route::get('admin/index',[AdminController::class,'dashBoard']);
Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin/logout',[AdminController::class,'logout'])->name('admin-logout');
Route::post('admin/loginProcess',[AdminController::class,'loginProcess']);
Route::get('admin/admin-list',[AdminController::class,'AdminList']);
Route::get('admin/admin-edit/{id}',[AdminController::class,'AdminEdit']);
Route::get('admin-delete/{id}',[AdminController::class,'delete']);