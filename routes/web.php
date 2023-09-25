<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\AttractionImageController;
use App\Http\Controllers\AttractionSubCategoryController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\CulinaryImageController;
use App\Http\Controllers\CulinaryMenuController;
use App\Http\Controllers\HeroimagesController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\TravelImageController;
use App\Http\Controllers\TravelMenuController;
use App\Http\Controllers\TravelMenuImageController;
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

Route::get('/detailmenu', function () {
    return view('detailmenu');
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

Route::get('/penginapan', function () {
    return view('penginapan');
});

Route::get('/penginapan/{slug}', function () {
    return view('penginapan-detail');
});

Route::get('/travel', function () {
    return view('travel');
});
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

Route::get('/admin', function () {
    return redirect('/admin/login');
});
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

// Atraksi

Route::get('/admin/attractions/checkSlug', [AttractionController::class, 'checkSlug'])->middleware('auth');
Route::get('/get-subcategories/{categoryId}', [AttractionController::class, 'getSubcategories'])->middleware('auth');
Route::resource('/admin/attractions', AttractionController::class)->middleware('auth');
Route::post('/admin/attraction-images/{id}', [AttractionImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/attraction-images/{id}', [AttractionImageController::class, 'destroy'])->middleware('auth')->name('admin.attractionimages.destroy');

Route::get('/admin/attraction-sub-categories/checkSlug', [AttractionSubCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/attraction-sub-categories', AttractionSubCategoryController::class)->except('show')->middleware('auth');

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
Route::resource('/admin/hotels/{hotelSlug}/rooms', HotelRoomController::class)->parameters([
    'rooms' => 'hotel-room'
])->except(['index', 'show'])->middleware('auth');
Route::delete('/admin/hotels/{hotelSlug}/room-images/{id}', [RoomImageController::class, 'destroy'])->middleware('auth');


// Kuliner

Route::get('/admin/culinaries/checkSlug', [CulinaryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/culinaries', CulinaryController::class)->middleware('auth');
Route::post('/admin/culinary-images/{id}', [CulinaryImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/culinary-images/{id}', [CulinaryImageController::class, 'destroy'])->middleware('auth')->name('admin.culinaryimages.destroy');

Route::get('/admin/culinaries/menus/checkSlug', [CulinaryMenuController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/culinaries/{culinarySlug}/menus', CulinaryMenuController::class)->parameters([
    'menus' => 'culinary-menu'
])->except(['index', 'show'])->middleware('auth');

// Travel=====================
Route::get('/admin/travels/checkSlug', [TravelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/travels', TravelController::class)->middleware('auth');
Route::post('/admin/travel-images/{id}', [TravelImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/travel-images/{id}', [TravelImageController::class, 'destroy'])->middleware('auth')->name('admin.travelimages.destroy');

Route::get('/admin/travels/menus/checkSlug', [TravelMenuController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/travels/{travelSlug}/menus', TravelMenuController::class)->parameters([
    'menus' => 'travel-menu'
])->except(['index', 'show'])->middleware('auth');
Route::delete('/admin/travels/{travelSlug}/travel-menu-images/{id}', [TravelMenuImageController::class, 'destroy'])->middleware('auth');

Route::get('/admin/add-menu', function () {
    return view('admin/add-menu');
});

Route::get('/admin/edit-menu', function () {
    return view('admin/edit-menu');
});

Route::get('/admin/reviews', function () {
    return view('admin/reviews');
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