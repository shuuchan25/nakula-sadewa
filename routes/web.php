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

Route::get('/admin/article', [ArticleController::class, 'index'])->name('admin.article.index');
Route::post('/admin/article', [ArticleController::class, 'store'])->name('admin.article.store');
Route::delete('/admin/article/{article}', [ArticleController::class, 'destroy'])->name('admin.article.destroy');

// setiap habis ngeroute run command "php artisan optimize" dan "php artisan serve"
Route::get('/admin/desawisata', function (){
    return view('/admin/desawisata');
});


