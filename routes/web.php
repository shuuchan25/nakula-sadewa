<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OverviewsController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', [FrontController::class, 'landing'])->name('landing');
Route::get('/', function () {
    return view('/welcome');
});

Route::get('/user/destinasiwisata', function () {
    return view('user/destinasiwisata');
});

Route::get('/user/kuliner', function () {
    return view('user/kuliner');
});

// Route::middleware('auth')->group(function () {

// });

Route::get('/admin/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('admin/detail-article/{article}', [ArticleController::class, 'detail'])->name('article.detail');
Route::get('/admin/add-article', [ArticleController::class, 'create'])->name('article.create');
Route::post('/admin/add-article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/admin/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/admin/article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/admin/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/admin/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/admin/faq', [FaqController::class, 'store'])->name('faq.store');
Route::get('/admin/faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('/admin/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('/admin/faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');

Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'authenticate']);

Route::post('/admin/logout', [LoginController::class, 'logout']);

Route::get('/admin/overviews', [OverviewsController::class, 'index'])->middleware('auth');

Route::get('/admin/user-management', function () {
    return view('admin/user-management');
});

Route::get('/admin/add-user', function () {
    return view('admin/add-user');
});

Route::get('/admin/destinasi-wisata', function () {
    return view('admin/destinasi-wisata');
});

Route::get('/admin/add-destinasi-wisata', function () {
    return view('admin/add-destinasi-wisata');
});

Route::get('/admin/detail-destinasi-wisata', function () {
    return view('admin/detail-destinasi-wisata');
});

Route::get('/admin/edit-destinasi-wisata', function () {
    return view('admin/edit-destinasi-wisata');
});

Route::get('/admin/desa-wisata', function () {
    return view('admin/desa-wisata');
});

Route::get('/admin/add-desa-wisata', function () {
    return view('admin/add-desa-wisata');
});

Route::get('/admin/detail-desa-wisata', function () {
    return view('admin/detail-desa-wisata');
});

Route::get('/admin/edit-desa-wisata', function () {
    return view('admin/edit-desa-wisata');
});

Route::get('/admin/desa-wisata', function () {
    return view('admin/hotel');
});

Route::get('/admin/add-hotel', function () {
    return view('admin/add-hotel');
});

Route::get('/admin/detail-hotel', function () {
    return view('admin/detail-hotel');
});

Route::get('/admin/edit-hotel', function () {
    return view('admin/edit-hotel');
});
