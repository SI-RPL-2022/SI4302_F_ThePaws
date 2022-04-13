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
Route::get('/admin/category1/tambah', [AdminController::class, 'tambahCategory1'])->name('admin.category1.tambah');
Route::post('/admin/category1/tambah', [AdminController::class, 'storeCategory1'])->name('admin.category1.store');
Route::get('/admin/category2/tambah', [AdminController::class, 'tambahCategory2'])->name('admin.category2.tambah');
Route::post('/admin/category2/tambah', [AdminController::class, 'storeCategory2'])->name('admin.category2.store');
Route::get('/admin/category1/edit/{id}', [AdminController::class, 'editCategory1'])->name('admin.category1.edit');
Route::post('/admin/category1/update/{id}', [AdminController::class, 'updateCategory1'])->name('admin.category1.update');
Route::get('/admin/category2/edit/{id}', [AdminController::class, 'editCategory2'])->name('admin.category2.edit');
Route::post('/admin/category2/update/{id}', [AdminController::class, 'updateCategory2'])->name('admin.category2.update');
Route::get('/admin/category1/delete/{id}', [AdminController::class, 'deleteCategory1'])->name('admin.category1.delete');
Route::get('/admin/category1/delete/{id}', [AdminController::class, 'deleteCategory1'])->name('admin.category1.delete');
Route::get('/admin/category2/delete/{id}', [AdminController::class, 'deleteCategory2'])->name('admin.category2.delete');
Route::get('/admin/category2/delete/{id}', [AdminController::class, 'deleteCategory2'])->name('admin.category2.delete');
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
