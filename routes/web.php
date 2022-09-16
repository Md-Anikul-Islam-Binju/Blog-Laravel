<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashbordController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;


use App\Http\Controllers\Frontend\FrontendDashbordController;

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
    return view('welcome');
});

//Admin
Route::get('/admin/page',[AdminDashbordController::class,'index'])->name('admin.home');
//Blog Category
Route::get('/blog/category',[CategoryController::class,'index'])->name('blog.category');
Route::post('/blog/category/store',[CategoryController::class,'store'])->name('blog.category.store');
Route::get('/blog/category/show',[CategoryController::class,'show'])->name('blog.category.show');
Route::get('/blog/category/edit/{id}',[CategoryController::class,'edit'])->name('blog.category.edit');
Route::post('/blog/category/update/{id}',[CategoryController::class,'update'])->name('blog.category.update');
Route::get('/blog/category/delete/{id}',[CategoryController::class,'destroy'])->name('blog.category.delete');

//Blog Sub Category
Route::get('/blog/sub/category',[SubCategoryController::class,'index'])->name('blog.sub.category');
Route::post('/blog/sub/category/store',[SubCategoryController::class,'store'])->name('blog.sub.category.store');
Route::get('/blog/sub/category/show',[SubCategoryController::class,'show'])->name('blog.sub.category.show');
Route::get('/blog/sub/category/delete/{id}',[SubCategoryController::class,'destroy'])->name('blog.sub.category.delete');

//Blog Post
Route::get('/blog/page',[BlogPostController::class,'index'])->name('blog.page');
Route::get('/get/subCategory/{category_id}',[BlogPostController::class,'getSubCategory']);
Route::post('/blog/post/store',[BlogPostController::class,'store'])->name('blog.post.store');
Route::get('/blog/post/show',[BlogPostController::class,'show'])->name('blog.post.show');
Route::get('/blog/post/edit/{slug}',[BlogPostController::class,'edit'])->name('blog.post.edit');
Route::post('/blog/post/update/{id}',[BlogPostController::class,'update'])->name('blog.post.update');
Route::get('/blog/post/delete/{id}',[BlogPostController::class,'destroy'])->name('blog.post.delete');
//Frontend
Route::get('/frontend/page',[FrontendDashbordController::class,'index'])->name('frontend.home');
Route::get('/details/page/{slug}',[FrontendDashbordController::class,'details'])->name('details.page');
