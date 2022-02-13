<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use App\Models\Post; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\FooterController;

Route::get('/', function () {
    return view('home', [
        "active" =>'home',
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => 'Wulan Rahmawati',
        "email" => 'wulansyantik28@gmail.com',
        "image" => 'wulan.png'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

Route::resource('/dashboard/admin', AdminController::class)->middleware('admin');

Route::get('/footer/contact', [FooterController::class, 'index']);
Route::get('/footer/service', [FooterController::class, 'indexS']);

Route::get('/sejarahblog', [HomeController::class, 'sejarah']);
Route::get('/webprogramming', [HomeController::class, 'webprogramming']);
Route::get('/webdesain', [HomeController::class, 'webdesain']);
Route::get('/personal', [HomeController::class, 'personal']);
Route::get('/aboutme', [HomeController::class, 'aboutme']);