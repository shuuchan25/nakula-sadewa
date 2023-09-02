<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
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

// Route::middleware('auth')->group(function () {

// });

Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/user/destinasiwisata', function () {
    return view('user/destinasiwisata');
});

Route::get('/admin/article', [ArticleController::class, 'index'])->name('article.index');
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

Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/overviews', function () {
    return view('admin/overviews');
});

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
