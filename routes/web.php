<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuidesController;
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

Route::get('/destinasiwisata', function () {
    return view('destinasiwisata');
});

Route::get('/detaildesa', function () {
    return view('detaildesa');
});

Route::get('/rumahmakan', function () {
    return view('rumahmakan');
});
// Route::get('/user/kuliner', function () {
//     return view('user/kuliner');
// });

// Route::middleware('auth')->group(function () {

// });

Route::get('/admin/articles/checkSlug', [ArticleController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/articles', ArticleController::class)->middleware('auth');

Route::get('/admin/stories/checkSlug', [StoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/stories', StoryController::class)->middleware('auth');

Route::get('/admin/events/checkSlug', [EventsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/events', EventsController::class)->middleware('auth');

Route::get('/admin/guides/checkSlug', [GuidesController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/guides', GuidesController::class)->middleware('auth');


Route::get('/admin/story', [StoriesController::class, 'index'])->name('story.index');
Route::get('admin/detail-story/{story}', [StoriesController::class, 'detail'])->name('story.detail');
Route::get('/admin/add-story', [StoriesController::class, 'create'])->name('story.create');
Route::post('/admin/add-story', [StoriesController::class, 'store'])->name('story.store');
Route::get('/admin/story/{story}/edit', [StoriesController::class, 'edit'])->name('story.edit');
Route::put('/admin/story/{story}', [StoriesController::class, 'update'])->name('story.update');
Route::delete('/admin/story/{story}', [StoriesController::class, 'destroy'])->name('story.destroy');


Route::get('/admin/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('admin/detail-faq/{faq}', [FaqController::class, 'detail'])->name('faq.detail');
Route::get('/admin/add-faq', [FaqController::class, 'create'])->name('faq.create');
Route::post('/admin/add-faq', [FaqController::class, 'store'])->name('faq.store');
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

Route::get('/admin/hotel', function () {
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

Route::get('/admin/culinary', function () {
    return view('admin/culinary');
});

Route::get('/admin/add-culinary', function () {
    return view('admin/add-culinary');
});

Route::get('/admin/detail-culinary', function () {
    return view('admin/detail-culinary');
});

Route::get('/admin/edit-culinary', function () {
    return view('admin/edit-culinary');
});

Route::get('/admin/travel', function () {
    return view('admin/travel');
});

Route::get('/admin/add-travel', function () {
    return view('admin/add-travel');
});

Route::get('/admin/detail-travel', function () {
    return view('admin/detail-travel');
});

Route::get('/admin/edit-travel', function () {
    return view('admin/edit-travel');
});

Route::get('/admin/web-setting', function () {
    return view('admin/web-setting');
});
