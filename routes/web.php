<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('index');
});

Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin route
Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/admin/category', [AdminController::class, 'showCategory'])->name('admin.category');
Route::get('/admin/category/tambah', [AdminController::class, 'tambahCategory'])->name('admin.category.tambah');
Route::post('/admin/category/tambah', [AdminController::class, 'storeCategory'])->name('admin.category.store');
Route::get('/admin/category/edit/{id}', [AdminController::class, 'editCategory'])->name('admin.category.edit');
Route::post('/admin/category/update/{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
Route::get('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');
