<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get ('/blogs/{id}', [blogsController::class, 'show'])->name('blogs.show'); 
Route::get('blogs', [blogsController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [blogsController::class, 'create'])->name('blogs.create');
Route::get('blogs/edit/{id}', [blogsController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/update/{id}', [blogsController::class, 'update'])->name('blogs.update');
Route::get('blogs/delete/{id}', [blogsController::class, 'destroy'])->name('blogs.destroy');

Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);
