<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HomeLayoutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FontController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::get('/', [FontController::class, 'index'])->name('me');
Route::get('/Blog', [FontController::class, 'blog'])->name('me.Blog');
Route::get('blog/{slug}',[FontController::class,'singleBlog'])->name('single.blog');

Route::post('/mail', [App\Http\Controllers\MassegController::class, 'index'])->name('mail.sand');
Route::get('/mail-me', [App\Http\Controllers\MassegController::class, 'mail'])->name('mail.me');


Auth::routes([

    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...

]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/update', [SettingsController::class, 'update'])->name('update');

Route::get('/Home-Layout', [HomeLayoutController::class, 'index'])->name('home.layout');

Route::get('/blog', [BlogsController::class, 'index'])->name('home.blog');

Route::get('createBlog', [BlogsController::class, 'create'])->name('blog-create');
Route::post('blog-create', [BlogsController::class, 'store'])->name('blog.create');

Route::get('blog-edit/{slug}', [BlogsController::class, 'edit'])->name('blog.edit');

Route::get('blog-see-first/{id}', [BlogsController::class, 'seeFirst'])->name('blog.see-first');

Route::get('blog-status/{id}/{status}', [BlogsController::class, 'status'])->name('blog.status');

Route::get('blog-del/{id}', [BlogsController::class, 'del'])->name('blog.del');
