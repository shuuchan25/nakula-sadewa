<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DesaWisataCategoryController;
use App\Http\Controllers\DesaWisataImageController;
use App\Http\Controllers\DesaWisataItemController;
use App\Http\Controllers\HeroimagesController;
use App\Http\Controllers\WeblogoController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HotelCategoryController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelImageController;
use App\Http\Controllers\HotelRoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OverviewsController;
use App\Http\Controllers\RoomImageController;
use App\Http\Controllers\TujuanWisataItemController;
use App\Http\Controllers\TujuanWisataImageController;
use App\Http\Controllers\TujuanWisataCategoryController;
use App\Http\Controllers\WebprofileController;
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

Route::get('/detailrumahmakan', function () {
    return view('detailrumahmakan');
});

Route::get('/petawisata', function () {
    return view('petawisata');
});

Route::get('/ceritawisatawan', function () {
    return view('ceritawisatawan');
});

Route::get('/kalenderevent', function () {
    return view('kalenderevent');
});

Route::get('/user/penginapan', function () {
    return view('user/penginapan');
});

Route::get('/user/penginapan/{slug}', function () {
    return view('user/penginapan-detail');
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

Route::get('/admin/faqs/checkSlug', [FaqController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/faqs', FaqController::class)->middleware('auth');

Route::get('/admin/webprofile', [WebprofileController::class, 'index'])->middleware('auth')->name('admin.webprofile');
Route::post('/admin/webprofile', [WebprofileController::class, 'update'])->middleware('auth')->name('admin.webprofile.update');

Route::get('/admin/gallery', [HeroimagesController::class, 'index'])->middleware('auth')->name('admin.gallery');
Route::post('/admin/gallery', [HeroimagesController::class, 'store'])->middleware('auth');
Route::delete('/admin/gallery/{id}', [HeroimagesController::class, 'destroy'])->middleware('auth')->name('admin.gallery.destroy');

Route::get('/admin/weblogo', [WeblogoController::class, 'index'])->middleware('auth')->name('admin.weblogo');
Route::post('/admin/weblogo', [WeblogoController::class, 'store'])->middleware('auth');
Route::delete('/admin/weblogo/{id}', [WeblogoController::class, 'destroy'])->middleware('auth')->name('admin.weblogo.destroy');

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

// Destinasi Wisata

Route::get('/admin/tujuan-wisata/checkSlug', [TujuanWisataItemController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/tujuan-wisata', TujuanWisataItemController::class)->parameters([
    'tujuan-wisata' => 'tujuan_wisata_item'
])->middleware('auth');
Route::post('/admin/tujuan-wisata-images/{id}', [TujuanWisataImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/tujuan-wisata-images/{id}', [TujuanWisataImageController::class, 'destroy'])->middleware('auth')->name('admin.tujuanwisataimages.destroy');

Route::get('/admin/kategori-tujuan-wisata/checkSlug', [TujuanWisataCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/kategori-tujuan-wisata', TujuanWisataCategoryController::class)->parameters([
    'kategori-tujuan-wisata' => 'tujuan-wisata-category'
])->except('show')->middleware('auth');

// Desa Wisata

Route::get('/admin/desa-wisata/checkSlug', [DesaWisataItemController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/desa-wisata', DesaWisataItemController::class)->parameters([
    'desa-wisata' => 'desa_wisata_item'
])->middleware('auth');
Route::post('/admin/desa-wisata-images/{id}', [DesaWisataImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/desa-wisata-images/{id}', [DesaWisataImageController::class, 'destroy'])->middleware('auth')->name('admin.desawisataimages.destroy');

Route::get('/admin/kategori-desa-wisata/checkSlug', [DesaWisataCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/kategori-desa-wisata', DesaWisataCategoryController::class)->parameters([
    'kategori-desa-wisata' => 'desa-wisata-category'
])->except('show')->middleware('auth');

// Hotel

Route::get('/admin/hotels/checkSlug', [HotelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/hotels', HotelController::class)->middleware('auth');
Route::post('/admin/hotel-images/{id}', [HotelImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/hotel-images/{id}', [HotelImageController::class, 'destroy'])->middleware('auth')->name('admin.hotelimages.destroy');

Route::get('/admin/kategori-hotel/checkSlug', [HotelCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/kategori-hotel', HotelCategoryController::class)->parameters([
    'kategori-hotel' => 'hotel-category'
])->except('show')->middleware('auth');

Route::get('/admin/hotels/rooms/checkSlug', [HotelRoomController::class, 'checkSlug'])->middleware('auth');
// Route::get('/admin/hotels/room/{slug}/create', [HotelRoomController::class, 'create'])->middleware('auth');
// Route::post('/admin/hotels/room/{slug}', [HotelRoomController::class, 'store'])->middleware('auth');
// Route::put('/admin/hotels/room/{slug}/edit', [HotelRoomController::class, 'edit'])->middleware('auth');
// Route::delete('/admin/hotels/room/{slug}', [HotelRoomController::class, 'destroy'])->middleware('auth');
Route::resource('/admin/hotels/{hotelSlug}/rooms', HotelRoomController::class)->parameters([
    'rooms' => 'hotel-room'
])->except(['index', 'show'])->middleware('auth');
Route::delete('/admin/hotels/{hotelSlug}/room-images/{id}', [RoomImageController::class, 'destroy'])->middleware('auth');

// Route::get('/admin/add-room', function () {
//     return view('admin/add-room');
// });

// Route::get('/admin/edit-room', function () {
//     return view('admin/edit-room');
// });

Route::get('/admin/add-menu', function () {
    return view('admin/add-menu');
});

Route::get('/admin/edit-menu', function () {
    return view('admin/edit-menu');
});

Route::get('/admin/culinary', function () {
    return view('admin/culinary');
});

Route::get('/admin/reviews', function () {
    return view('admin/reviews');
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