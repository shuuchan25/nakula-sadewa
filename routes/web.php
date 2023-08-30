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

Route::get('/', [FrontController::class, 'landing'])->name('landing');

// Route::middleware('auth')->group(function () {

// });

Route::get('/admin/article', [ArticleController::class, 'index'])->name('article.index');
Route::post('/admin/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/admin/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/admin/article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/admin/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');


Route::get('/admin/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/admin/faq', [FaqController::class, 'store'])->name('faq.store');
Route::get('/admin/faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('/admin/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('/admin/faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');
