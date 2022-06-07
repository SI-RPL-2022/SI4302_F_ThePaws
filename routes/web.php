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
Route::get('/pethouse', [WebController::class, 'pethouse_index'])->name('pethouse.index');
Route::get('/pethouse/search/', [WebController::class, 'pethouse_search'])->name('pethouse.search');
Route::get('/pethouse/details/{id}', [WebController::class, 'pethouse_details'])->name('pethouse.details');
Route::get('/carecommend', [WebController::class, 'carecommend_index'])->name('carecommend.index');
Route::post('/carecommend/result', [WebController::class, 'carecommend_result'])->name('carecommend.result');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('blogs', function () {
    return view('blogs');
});
Route::get('blogs/create', function () {
    return view('blogs.create');
});

Route::get('/admin/editpethouse', function () {
    return view('admin.editpethouse');
});

Route::get('/admin/editpethouse1', function () {
    return view('admin.editpethouse1');
});

Route::get('/admin/carerecommend', function () {
    return view('admin.carerecommend');
});

Route::get('adoption/detail', function () {
    return view('adoption.detail');
});

// Route::get('blogs/filter', function(){
//     return view('blogs.filter');
// });
Auth::routes();

Route::get('/blogs/{id}', [blogsController::class, 'show'])->name('blogs.show');

//user route
// Route::get('/admin', "App\Http\Controllers\AdminController@index")->name('admin');
// Route::get('/user', 'App\Http\Controllers\UserController@profile')->name('user.profile');
Route::get('/user', [UserController::class, 'profile'])->name('user.profile');
Route::get('/edit/user', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/edit/user', [UserController::class, 'update'])->name('user.update');
Route::post('/user/photo',[UserController::class, 'upload'])->name('user.upload');

// //admin route
// category
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

// blogs
Route::get('/admin/blogs', [AdminController::class, 'indexBlog'])->name('blogs.admin');
Route::post('/admin/blogs/create', [AdminController::class, 'storeBlog'])->name('blogs.store');
Route::get('/admin/blogs/create', [AdminController::class, 'createBlog'])->name('blogs.create');
Route::get('/admin/blogs/edit/{id}', [AdminController::class, 'editBlog'])->name('blogs.edit');
Route::post('/admin/blogs/update/{id}', [AdminController::class, 'updateBlog'])->name('blogs.update');
Route::get('/admin/blogs/delete/{id}', [AdminController::class, 'destroyBlog'])->name('blogs.destroy');
Route::get('/admin/pethouse', [AdminController::class, 'indexPethouse'])->name('admin.pethouse');
Route::get('/admin/pethouse/create', [AdminController::class, 'createPethouse'])->name('admin.pethouse.create');
Route::post('/admin/pethouse/create', [AdminController::class, 'storePethouse'])->name('admin.pethouse.store');
Route::get('/admin/pethouse/edit/{id}', [AdminController::class, 'editPethouse'])->name('admin.pethouse.edit');
Route::post('/admin/pethouse/update/{id}', [AdminController::class, 'updatePethouse'])->name('admin.pethouse.update');
Route::get('/admin/pethouse/delete/{id}', [AdminController::class, 'destroyPethouse'])->name('admin.pethouse.destroy');
Route::get('/admin/carecommend', [AdminController::class, 'indexCarecommend'])->name('admin.carecommend');
Route::get('/admin/carecommend/food/create', [AdminController::class, 'createFood'])->name('admin.food.create');
Route::post('/admin/carecommend/food/create', [AdminController::class, 'storeFood'])->name('admin.food.store');
Route::get('/admin/carecommend/food/edit/{id}', [AdminController::class, 'editFood'])->name('admin.food.edit');
Route::post('/admin/carecommend/food/update/{id}', [AdminController::class, 'updateFood'])->name('admin.food.update');
Route::get('/admin/carecommend/food/delete/{id}', [AdminController::class, 'destroyFood'])->name('admin.food.delete');
Route::get('/admin/carecommend/vaccine/create', [AdminController::class, 'createvaccine'])->name('admin.vaccine.create');
Route::post('/admin/carecommend/vaccine/create', [AdminController::class, 'storevaccine'])->name('admin.vaccine.store');
Route::get('/admin/carecommend/vaccine/edit/{id}', [AdminController::class, 'editvaccine'])->name('admin.vaccine.edit');
Route::post('/admin/carecommend/vaccine/update/{id}', [AdminController::class, 'updatevaccine'])->name('admin.vaccine.update');
Route::get('/admin/carecommend/vaccine/delete/{id}', [AdminController::class, 'destroyvaccine'])->name('admin.vaccine.delete');
Route::get('/admin/carecommend/umur/create', [AdminController::class, 'createUmur'])->name('admin.umur.create');
Route::post('/admin/carecommend/umur/store', [AdminController::class, 'storeUmur'])->name('admin.umur.store');
Route::get('/admin/carecommend/umur/edit/{id}', [AdminController::class, 'editUmur'])->name('admin.umur.edit');
Route::post('/admin/carecommend/umur/update/{id}', [AdminController::class, 'updateUmur'])->name('admin.umur.update');
Route::get('/admin/carecommend/umur/delete/{id}', [AdminController::class, 'destroyUmur'])->name('admin.umur.delete');
Route::get('/admin/carecommend/beratbadan/create', [AdminController::class, 'createBB'])->name('admin.BB.create');
Route::post('/admin/carecommend/beratbadan/store', [AdminController::class, 'storeBB'])->name('admin.BB.store');
Route::get('/admin/carecommend/beratbadan/edit/{id}', [AdminController::class, 'editBB'])->name('admin.BB.edit');
Route::post('/admin/carecommend/beratbadan/update/{id}', [AdminController::class, 'updateBB'])->name('admin.BB.update');
Route::get('/admin/carecommend/beratbadan/delete/{id}', [AdminController::class, 'destroyBB'])->name('admin.BB.delete');

Route::get('/blogs/{id}', [blogsController::class, 'show'])->name('blogs.show');
Route::post('/blogs/{id}/comment', [blogsController::class, 'saveComment'])->name('blogs.comment.save');
Route::get('/blogs', [blogsController::class, 'index'])->name('blogs.all');
Route::get('/blogs/filter/{nama}', [blogsController::class, 'filter'])->name('blogs.filter');
// Route::get('/blogs/{id}', [blogsController::class, 'details'])->name('blogs.details');{}{}
// Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);

// pethouse
Route::get('/admin/pethouse', [AdminController::class, 'indexPethouse'])->name('admin.pethouse');
// Route::post('/admin/pethouse/tambah', [AdminController::class, 'tambahPethouse'])->name('admin.pethouse.tambah');
Route::get('/admin/pethouse/tambah', [AdminController::class, 'tambahPethouse'])->name('admin.pethouse.tambah');
Route::get('/admin/pethouse/edit/{id}', [AdminController::class, 'editPethouse'])->name('admin.pethouse.edit');
Route::post('/admin/pethouse/create', [AdminController::class, 'storePethouse'])->name('admin.pethouse.store');
Route::get('/admin/pethouse/delete/{id}', [AdminController::class, 'destroyPethouse'])->name('admin.pethouse.destroy');

// // user route
Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.profile.edit');
Route::post('/profile/edit', [UserController::class, 'update'])->name('user.profile.update');