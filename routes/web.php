<?php

use App\Models\ModelPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AksesAdminController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Home"
    ]);
});
//halaman About
Route::get('/about', function () {
    return view('about', [
        "title" => "About"     
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/profile/{id}', [LoginController::class, 'show'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function(){
    return view('dashboard.index'); })->middleware(['auth', 'admin']);

Route::resource('/dashboard/post', DashboardPostController::class)->middleware(['auth', 'admin']);
Route::get('/dashboard/akses', [AksesAdminController::class, 'index'])->middleware('admin');

//memguhubungkan controller
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

