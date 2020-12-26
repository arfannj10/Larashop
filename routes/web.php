<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();
Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register");

Route::resource('users',App\Http\Controllers\UserController::class);

Route::get('/categories/trash', [App\Http\Controllers\CategoryController::class,'trash'])->name('categories.trash');
Route::get('/categories/{id}/restore', [App\Http\Controllers\CategoryController::class,'restore'])->name('categories.restore');
Route::get('/categories/{category}/delete-permanent', [App\Http\Controllers\CategoryController::class,'deletepermanent'])->name('categories.delete-permanent');
Route::get('/categories/ajaxSearch', [App\Http\Controllers\CategoryController::class,'ajaxSearch']);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('books', App\Http\Controllers\BookController::class);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
