<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

// Route::middleware(['auth', 'admin'])->group(function (){
//     Route::get('users/profile', 'Users')
// })
Route::get('/admin', "App\Http\Controllers\AdminController@index")->name('admin');

Route::get('/user/{id}', 'App\Http\Controllers\UserController@profile')->name('user.profile');
Route::get('/edit/user', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/edit/user', 'App\Http\Controllers\UserController@update')->name('user.update');