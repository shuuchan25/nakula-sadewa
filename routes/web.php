<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StoriesController;
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

Route::get('/user/destinasiwisata', function () {
    return view('user/destinasiwisata');
});

Route::get('/user/penginapan', function () {
    return view('user/penginapan');
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


Route::get('/admin/story', [StoriesController::class, 'index'])->name('story.index');
Route::get('admin/detail-story/{story}', [StoriesController::class, 'detail'])->name('story.detail');
Route::get('/admin/add-story', [StoriesController::class, 'create'])->name('story.create');
Route::post('/admin/add-story', [StoriesController::class, 'store'])->name('story.store');
Route::get('/admin/story/{story}/edit', [StoriesController::class, 'edit'])->name('story.edit');
Route::put('/admin/story/{story}', [StoriesController::class, 'update'])->name('story.update');
Route::delete('/admin/story/{story}', [StoriesController::class, 'destroy'])->name('story.destroy');

Route::get('/admin/event', [EventsController::class, 'index'])->name('event.index');
Route::get('admin/detail-event/{event}', [EventsController::class, 'detail'])->name('event.detail');
Route::get('/admin/add-event', [EventsController::class, 'create'])->name('event.create');
Route::post('/admin/add-event', [EventsController::class, 'store'])->name('event.store');
Route::get('/admin/event/{event}/edit', [EventsController::class, 'edit'])->name('event.edit');
Route::put('/admin/event/{event}', [EventsController::class, 'update'])->name('event.update');
Route::delete('/admin/event/{event}', [EventsController::class, 'destroy'])->name('event.destroy');

Route::get('/admin/guide', [GuidesController::class, 'index'])->name('guide.index');
Route::get('admin/detail-guide/{guide}', [GuidesController::class, 'detail'])->name('guide.detail');
Route::get('/admin/add-guide', [GuidesController::class, 'create'])->name('guide.create');
Route::post('/admin/add-guide', [GuidesController::class, 'store'])->name('guide.store');
Route::get('/admin/guide/{guide}/edit', [GuidesController::class, 'edit'])->name('guide.edit');
Route::put('/admin/guide/{guide}', [GuidesController::class, 'update'])->name('guide.update');
Route::delete('/admin/guide/{guide}', [GuidesController::class, 'destroy'])->name('guide.destroy');

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

// Route::get('/admin/story', function () {
//     return view('admin/story');
// });

// Route::get('/admin/add-story', function () {
//     return view('admin/add-story');
// });

// Route::get('/admin/detail-story', function () {
//     return view('admin/detail-story');
// });

// Route::get('/admin/edit-story', function () {
//     return view('admin/edit-story');
// });

// Route::get('/admin/faq', function () {
//     return view('admin/faq');
// });

// Route::get('/admin/add-faq', function () {
//     return view('admin/add-faq');
// });

// Route::get('/admin/detail-faq', function () {
//     return view('admin/detail-faq');
// });

// Route::get('/admin/edit-faq', function () {
//     return view('admin/edit-faq');

// });

// Route::get('/admin/event', function () {
//     return view('admin/event');
// });

// Route::get('/admin/add-event', function () {
//     return view('admin/add-event');
// });

// Route::get('/admin/detail-event', function () {
//     return view('admin/detail-event');
// });

// Route::get('/admin/edit-event', function () {
//     return view('admin/edit-event');
// });

// Route::get('/admin/guide', function () {
//     return view('admin/guide');
// });

// Route::get('/admin/add-guide', function () {
//     return view('admin/add-guide');
// });

// Route::get('/admin/detail-guide', function () {
//     return view('admin/detail-guide');
// });

// Route::get('/admin/edit-guide', function () {
//     return view('admin/edit-guide');
// });