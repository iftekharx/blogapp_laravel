<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name("index");

Route::get('login', [AuthController::class, 'log'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'reg'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dash', [AuthController::class, 'dashboard'])->name('blogfeed');
Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('blogget', [BlogController::class, 'particular_blog'])->name('blogfetch'); 
Route::get('create-blog', [BlogController::class, 'create_blog'])->name('create-blog'); 
Route::post('blog-post', [BlogController::class, 'post_blog'])->name('post-blog'); 

Route::get('about', [AuthController::class, 'about'])->name('about');
