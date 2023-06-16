<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataPemesanan;
use App\Http\Controllers\DataUser;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         'active' => 'home'
//     ]);
// });

Route::get('/', function () {
    return view('dashboard.index', [
        'active' => 'Dashboard'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Faze Clan",
        'active' => 'about',
        "email" => "fazeclan@gmail.com",
        "image" => "profile.png",        
        "title" => "About"
    ]);
});

Route::get('/dashboard/about', function () {
    return view('dashboard.about.about', [
        'active' => 'about',
        'title' => 'About'
    ]);
});

Route::get('/dashboard/contact', [ContactController::class, 'show'])->name('contact.show');

// All Post
Route::get('/posts', [PostController::class, 'index']);

// Single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories',  function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index', [
        'active' => 'Dashboard'
    ]);
});

Route::resource('/datauser', DataUser::class)->middleware('admin');
Route::resource('/dataorder', DataPemesanan::class)->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
