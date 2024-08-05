<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

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

Route::get('/', [TinController::class, 'index']);

Route::get('/detail/{id}', [TinController::class, 'show'])->name('show');
Route::get('/new/{id}', [TinController::class, 'new'])->name('new');
Route::get('/search', [TinController::class, 'search'])->name('seach');




Route::get('register', [AuthController::class, 'registerForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('menber', [MenberController::class, 'index'])->middleware(['auth'])->name('menber');


Route::get('admin', [AdminController::class, 'index'])
   ->middleware(['auth', 'admin'])
   ->name('admin');
Route::get('admin/category', [AdminController::class, 'category'])
   ->middleware(['auth', 'admin'])
   ->name('admin/category');
Route::get('admin/post', [AdminController::class, 'post'])
   ->middleware(['auth', 'admin'])
   ->name('admin/post');

Route::delete('destroyPost/{id}', [AdminController::class, 'deletePost'])->name('destroyPost');


Route::get('admin/addPost', [AdminController::class, 'addPostForm'])->name('createPost');
Route::post('admin/addPost', [AdminController::class, 'addPost'])->name('addPost');
Route::get('admin/editPost/{id}',      [AdminController::class,'editPostForm'])->name('editPost');
Route::post('admin/editPost/{id}',     [AdminController::class,'updatePost'])->name('updatePost');

Route::get('admin/addCate', [AdminController::class, 'addcateForm'])->name('createCate');
Route::post('admin/addCate', [AdminController::class, 'addcate'])->name('addCate');

Route::get('admin/editCate/{id}',      [AdminController::class,'editCateForm'])->name('editCate');
Route::post('admin/editCate/{id}',     [AdminController::class,'updateCate'])->name('updateCate');




Route::delete('destroyCate/{id}', [AdminController::class, 'deleteCate'])->name('destroyCate');
