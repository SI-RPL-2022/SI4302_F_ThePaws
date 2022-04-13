<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\BlogController;


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

Route::get('/', [WebController::class, 'index'])->name('landing.page');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('blogs', function () {
    return view('blogs');
});
Route::get('blogs/create', function () {
    return view('blogs.create');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs/{id}', [blogsController::class, 'show'])->name('blogs.show');

//user route
// Route::get('/admin', "App\Http\Controllers\AdminController@index")->name('admin');

Route::get('/user/{id}', 'App\Http\Controllers\UserController@profile')->name('user.profile');
Route::get('/edit/user', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/edit/user', 'App\Http\Controllers\UserController@update')->name('user.update');

// //admin route
Route::get('/admin', [AdminController::class, 'dashboardAdmin'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/category', [AdminController::class, 'showCategory'])->name('admin.category');
Route::get('/admin/category/tambah', [AdminController::class, 'tambahCategory'])->name('admin.category.tambah');
Route::post('/admin/category/tambah', [AdminController::class, 'storeCategory'])->name('admin.category.store');
Route::get('/admin/category/edit/{id}', [AdminController::class, 'editCategory'])->name('admin.category.edit');
Route::post('/admin/category/update/{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
Route::get('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');
Route::get('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');
Route::get('/admin/blogs', [AdminController::class, 'indexBlog'])->name('blogs.admin');
Route::post('/admin/blogs/create', [AdminController::class, 'storeBlog'])->name('blogs.store');
Route::get('/admin/blogs/create', [AdminController::class, 'createBlog'])->name('blogs.create');
Route::get('/admin/blogs/edit/{id}', [AdminController::class, 'editBlog'])->name('blogs.edit');
Route::post('/admin/blogs/update/{id}', [AdminController::class, 'updateBlog'])->name('blogs.update');
Route::get('/admin/blogs/delete/{id}', [AdminController::class, 'destroyBlog'])->name('blogs.destroy');


Route::get('/blogs/{id}', [blogsController::class, 'show'])->name('blogs.show');
Route::get('/blogs', [blogsController::class, 'index'])->name('blogs.all');
// Route::get('/blogs/{id}', [blogsController::class, 'details'])->name('blogs.details');{}{}

// Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);
