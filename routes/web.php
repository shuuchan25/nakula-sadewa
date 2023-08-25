<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
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

