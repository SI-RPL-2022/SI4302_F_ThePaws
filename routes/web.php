<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;


use App\Http\Controllers\HomeController;

use App\Http\Middleware\IsAdmin;


use App\Http\Middleware\IsAdmin;    
use App\Http\Controllers\blogsController;

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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/faq', function () {
    return view('faq');

});

Route::get('blogs', function () {
	return view('blogs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin route
Route::get('/admin', [AdminController::class, 'dashboardAdmin'])->name('admin.dashboard');
Route::get('/admin/category', [AdminController::class, 'showCategory'])->name('admin.category');
Route::get('/admin/category/tambah', [AdminController::class, 'tambahCategory'])->name('admin.category.tambah');
Route::post('/admin/category/tambah', [AdminController::class, 'storeCategory'])->name('admin.category.store');
Route::get('/admin/category/edit/{id}', [AdminController::class, 'editCategory'])->name('admin.category.edit');
Route::post('/admin/category/update/{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
Route::get('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');

Route::get ('/blogs/index', [blogsController::class, 'show'])->name('blogs.show'); 
Route::get('blogs', [blogsController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [blogsController::class, 'create'])->name('blogs.create');
Route::get('blogs/edit/{id}', [blogsController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/update/{id}', [blogsController::class, 'update'])->name('blogs.update');
Route::get('blogs/delete/{id}', [blogsController::class, 'destroy'])->name('blogs.destroy');

Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);

