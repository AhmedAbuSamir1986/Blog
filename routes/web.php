<?php

use App\Http\Controllers\Dashbaord\CategoryController;
use App\Http\Controllers\Dashbaord\PostController;
use App\Http\Controllers\Dashbaord\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashbaord\SettingController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\WebsiteCategoryController;
use App\Http\Controllers\Website\WebsitePostController;
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


// Website routes
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/categories/{category}', [WebsiteCategoryController::class, 'show'])->name('category');
Route::get('/post/{post}', [WebsitePostController::class, 'show'])->name('post');


// Dashboard routes
Route::group(['prefix'=>'dashboard', 'as'=>'dashboard.', 'middleware'=>['auth', 'checkLogin']], function(){
    Route::get('/', function (){
        return view('dashboard.index');
    })->name('index');
    
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');
    
    Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');
    
    Route::get('/category/all', [CategoryController::class, 'getCategoriesDatatable'])->name('category.all');
    Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');
    
    Route::get('/posts/all', [PostController::class, 'getPostsDatatable'])->name('posts.all');
    Route::post('/posts/delete', [PostController::class, 'delete'])->name('posts.delete');
    
    Route::resources([
        'users' => UserController::class,
        'category' => CategoryController::class,
        'posts' => PostController::class,
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
