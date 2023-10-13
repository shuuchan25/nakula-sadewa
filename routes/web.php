<?php

use App\Http\Controllers\DigitalMapController;
use App\Http\Controllers\EventImageController;
use App\Http\Controllers\faqPageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\AttractionImageController;
use App\Http\Controllers\AttractionPageController;
use App\Http\Controllers\AttractionSubCategoryController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\CulinaryImageController;
use App\Http\Controllers\CulinaryMenuController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HeroimagesController;
use App\Http\Controllers\HotelPageController;
use App\Http\Controllers\LeafletController;
use App\Http\Controllers\MapCategoryController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopImageController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\TravelImageController;
use App\Http\Controllers\TravelMenuController;
use App\Http\Controllers\TravelMenuImageController;
use App\Http\Controllers\TravelMenuPageController;
use App\Http\Controllers\TravelPageController;
use App\Http\Controllers\WeblogoController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HotelCategoryController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelImageController;
use App\Http\Controllers\HotelRoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OverviewsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomImageController;
use App\Http\Controllers\UserController;
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
Route::get('/', [HomePageController::class, 'index'])->middleware('guest');

Route::get('/faq', [faqPageController::class, 'index'])->middleware('guest');

Route::get('/travels/{travel}/profile', [TravelPageController::class, 'show']);
Route::get('/travels/checkSlug', [TravelPageController::class, 'travelSlug']);

Route::get('/travels/index', [TravelMenuPageController::class, 'index']);
Route::get('/travels/{travelMenu}/detail', [TravelMenuPageController::class, 'show']);
Route::get('/travels/checkSlug', [TravelMenuPageController::class, 'travelMenuSlug']);

Route::get('/attractions', [AttractionPageController::class, 'index']);
Route::get('/attractions/{attraction}', [AttractionPageController::class, 'show']);

Route::get('/hotels/index', [HotelPageController::class, 'index']);
Route::get('/hotels/{hotel}/detail', [HotelPageController::class, 'show']);

Route::get('/atraksialam', function () {
    return view('atraksialam');
});

Route::get('/atraksibudaya', function () {
    return view('atraksibudaya');
});

Route::get('/atraksibuatan', function () {
    return view('atraksibuatan');
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

Route::get('/penginapan-detail', function () {
    return view('penginapan-detail');
});

Route::get('/travel', function () {
    return view('travel');
});

Route::get('/tentangtrenggalek', function () {
    return view('tentangtrenggalek');
});


Route::get('/detailtiketwisata', function () {
    return view('detailtiketwisata');
});

Route::get('/beritaterkini', function () {
    return view('beritaterkini');
});

Route::get('/katamereka', function () {
    return view('katamereka');
});

Route::get('/kalkulator', function () {
    return view('kalkulator');
});

Route::get('/jajan', function () {
    return view('jajan');
});

Route::get('/detailpusatoleh', function () {
    return view('detailpusatoleh');
});

Route::get('/detailjajan', function () {
    return view('detailjajan');
});

Route::get('/listkalenderevent', function () {
    return view('listkalenderevent');
});

Route::get('/listberitaterkini', function () {
    return view('listberitaterkini');
});
// Route::middleware('auth')->group(function () {

// });

Route::get('/admin/articles/checkSlug', [ArticleController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/articles', ArticleController::class)->middleware(['auth', 'superadmin']);

Route::get('/admin/leaflets/checkSlug', [LeafletController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/leaflets', LeafletController::class)->except(['show'])->middleware(['auth', 'superadmin']);


Route::get('/admin/stories/checkSlug', [StoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/stories', StoryController::class)->middleware(['auth', 'superadmin']);

Route::get('/admin/events/checkSlug', [EventsController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/events', EventsController::class)->middleware(['auth', 'superadmin']);
Route::post('/admin/event-images/{id}', [EventImageController::class, 'store'])->middleware(['auth', 'superadmin']);
Route::delete('/admin/event-images/{id}', [EventImageController::class, 'destroy'])->middleware(['auth', 'superadmin'])->name('admin.eventimages.destroy');

Route::get('/admin/guides/checkSlug', [GuidesController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/guides', GuidesController::class)->middleware(['auth', 'superadmin']);

Route::get('/admin/faqs/checkSlug', [FaqController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/faqs', FaqController::class)->middleware(['auth', 'superadmin']);

Route::get('/admin/webprofile', [WebprofileController::class, 'index'])->middleware(['auth', 'superadmin'])->name('admin.webprofile');
Route::post('/admin/webprofile', [WebprofileController::class, 'update'])->middleware(['auth', 'superadmin'])->name('admin.webprofile.update');

Route::get('/admin/gallery', [HeroimagesController::class, 'index'])->middleware(['auth', 'superadmin'])->name('admin.gallery');
Route::post('/admin/gallery', [HeroimagesController::class, 'store'])->middleware(['auth', 'superadmin']);
Route::delete('/admin/gallery/{id}', [HeroimagesController::class, 'destroy'])->middleware(['auth', 'superadmin'])->name('admin.gallery.destroy');

Route::get('/admin/weblogo', [WeblogoController::class, 'index'])->middleware(['auth', 'superadmin'])->name('admin.weblogo');
Route::post('/admin/weblogo', [WeblogoController::class, 'store'])->middleware(['auth', 'superadmin']);
Route::delete('/admin/weblogo/{id}', [WeblogoController::class, 'destroy'])->middleware(['auth', 'superadmin'])->name('admin.weblogo.destroy');

Route::get('/admin/reviews', [ReviewController::class, 'index'])->middleware(['auth', 'superadmin']);
Route::put('/admin/reviews/{id}', [ReviewController::class, 'update'])->middleware(['auth', 'superadmin']);
Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])->middleware(['auth', 'superadmin']);
Route::post('/', [ReviewController::class, 'store'])->middleware('guest');

Route::get('/admin', function () {
    return redirect('/admin/login');
});
Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'authenticate']);

Route::post('/admin/logout', [LoginController::class, 'logout']);

Route::get('/admin/overviews', [OverviewController::class, 'index'])->middleware('auth');

Route::resource('/admin/users', UserController::class)->middleware('auth');

// Atraksi

Route::get('/admin/attractions/checkSlug', [AttractionController::class, 'checkSlug'])->middleware(['auth', 'admin-atraksi']);
Route::get('/get-subcategories/{categoryId}', [AttractionController::class, 'getSubcategories'])->middleware(['auth', 'admin-atraksi']);
Route::resource('/admin/attractions', AttractionController::class)->middleware(['auth', 'admin-atraksi']);
Route::get('/admin/attractions', [AttractionController::class, 'index'])->middleware(['auth', 'super-atraksi']);
Route::get('/admin/attractions/{attraction}', [AttractionController::class, 'show'])->middleware(['auth', 'super-atraksi']);
Route::post('/admin/attraction-images/{id}', [AttractionImageController::class, 'store'])->middleware(['auth', 'admin-atraksi']);
Route::delete('/admin/attraction-images/{id}', [AttractionImageController::class, 'destroy'])->middleware(['auth', 'admin-atraksi'])->name('admin.attractionimages.destroy');

Route::get('/admin/attraction-sub-categories/checkSlug', [AttractionSubCategoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/attraction-sub-categories', AttractionSubCategoryController::class)->except('show')->middleware(['auth', 'superadmin']);
Route::get('/admin/attraction-sub-categories', [AttractionSubCategoryController::class, 'index'])->middleware(['auth', 'super-atraksi']);

// Hotel

Route::get('/admin/hotels/checkSlug', [HotelController::class, 'checkSlug'])->middleware(['auth', 'admin-akomodasi']);
Route::resource('/admin/hotels', HotelController::class)->middleware(['auth', 'admin-akomodasi']);
Route::get('/admin/hotels', [HotelController::class, 'index'])->middleware(['auth', 'super-akomodasi']);
Route::get('/admin/hotels/{hotel}', [HotelController::class, 'show'])->middleware(['auth', 'super-akomodasi']);
Route::post('/admin/hotel-images/{id}', [HotelImageController::class, 'store'])->middleware(['auth', 'admin-akomodasi']);
Route::delete('/admin/hotel-images/{id}', [HotelImageController::class, 'destroy'])->middleware(['auth', 'admin-akomodasi'])->name('admin.hotelimages.destroy');

Route::get('/admin/kategori-hotel/checkSlug', [HotelCategoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/kategori-hotel', HotelCategoryController::class)->parameters([
    'kategori-hotel' => 'hotel-category'
])->except('show')->middleware(['auth', 'superadmin']);
Route::get('/admin/kategori-hotel', [HotelCategoryController::class, 'index'])->middleware(['auth', 'super-akomodasi']);

Route::get('/admin/hotels/rooms/checkSlug', [HotelRoomController::class, 'checkSlug'])->middleware(['auth', 'admin-akomodasi']);
Route::resource('/admin/hotels/{hotelSlug}/rooms', HotelRoomController::class)->parameters([
    'rooms' => 'hotel-room'
])->except(['index', 'show'])->middleware(['auth', 'admin-akomodasi']);
Route::delete('/admin/hotels/{hotelSlug}/room-images/{id}', [RoomImageController::class, 'destroy'])->middleware(['auth', 'admin-akomodasi']);


// Kuliner

Route::get('/admin/culinaries/checkSlug', [CulinaryController::class, 'checkSlug'])->middleware(['auth', 'admin-kuliner']);
Route::resource('/admin/culinaries', CulinaryController::class)->middleware(['auth', 'admin-kuliner']);
Route::get('/admin/culinaries', [CulinaryController::class, 'index'])->middleware(['auth', 'super-kuliner']);
Route::get('/admin/culinaries/{culinary}', [CulinaryController::class, 'show'])->middleware(['auth', 'super-kuliner']);
Route::post('/admin/culinary-images/{id}', [CulinaryImageController::class, 'store'])->middleware(['auth', 'admin-kuliner']);
Route::delete('/admin/culinary-images/{id}', [CulinaryImageController::class, 'destroy'])->middleware(['auth', 'admin-kuliner'])->name('admin.culinaryimages.destroy');

Route::get('/admin/culinaries/menus/checkSlug', [CulinaryMenuController::class, 'checkSlug'])->middleware(['auth', 'admin-kuliner']);
Route::resource('/admin/culinaries/{culinarySlug}/menus', CulinaryMenuController::class)->parameters([
    'menus' => 'culinary-menu'
])->except(['index', 'show'])->middleware(['auth', 'admin-kuliner']);

// Pusat Oleh-oleh

Route::get('/admin/shops/checkSlug', [ShopController::class, 'checkSlug'])->middleware(['auth', 'admin-toko']);
Route::resource('/admin/shops', ShopController::class)->middleware(['auth', 'admin-toko']);
Route::get('/admin/shops', [ShopController::class, 'index'])->middleware(['auth', 'super-toko']);
Route::get('/admin/shops/{shop}', [ShopController::class, 'show'])->middleware(['auth', 'super-toko']);
Route::post('/admin/shop-images/{id}', [ShopImageController::class, 'store'])->middleware(['auth', 'admin-toko']);
Route::delete('/admin/shop-images/{id}', [ShopImageController::class, 'destroy'])->middleware(['auth', 'admin-toko'])->name('admin.shopimages.destroy');

Route::get('/admin/shops/gifts/checkSlug', [GiftController::class, 'checkSlug'])->middleware(['auth', 'admin-toko']);
Route::resource('/admin/shops/{giftSlug}/gifts', GiftController::class)->except(['index', 'show'])->middleware(['auth', 'admin-toko']);

// Travel=====================
Route::get('/admin/travels/checkSlug', [TravelController::class, 'checkSlug'])->middleware(['auth', 'admin-biro']);
Route::resource('/admin/travels', TravelController::class)->middleware(['auth', 'admin-biro']);
Route::get('/admin/travels', [TravelController::class, 'index'])->middleware(['auth', 'super-biro']);
Route::get('/admin/travels/{travel}', [TravelController::class, 'show'])->middleware(['auth', 'super-biro']);
Route::post('/admin/travel-images/{id}', [TravelImageController::class, 'store'])->middleware(['auth', 'admin-biro']);
Route::delete('/admin/travel-images/{id}', [TravelImageController::class, 'destroy'])->middleware(['auth', 'admin-biro'])->name('admin.travelimages.destroy');

Route::get('/admin/travels/travel-menus/checkSlug', [TravelMenuController::class, 'checkSlug'])->middleware(['auth', 'admin-biro']);
Route::resource('/admin/travels/{travelSlug}/travel-menus', TravelMenuController::class)->parameters([
    'travel-menus' => 'travel-menu'
])->except(['index', 'show'])->middleware(['auth', 'admin-biro']);
Route::delete('/admin/travels/{travelSlug}/travel-menu-images/{id}', [TravelMenuImageController::class, 'destroy'])->middleware(['auth', 'admin-biro']);

// Digital Maps

Route::get('/admin/maps/checkSlug', [DigitalMapController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/maps', DigitalMapController::class)->middleware(['auth', 'superadmin']);

Route::get('/admin/map-categories/checkSlug', [MapCategoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/map-categories', MapCategoryController::class)->except('show')->middleware(['auth', 'superadmin']);

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
