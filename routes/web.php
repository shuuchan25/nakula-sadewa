<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ArticlePageController;
use App\Http\Controllers\DigitalMapController;
use App\Http\Controllers\DigitalMapPageController;
use App\Http\Controllers\EventImageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\faqPageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\AttractionImageController;
use App\Http\Controllers\AttractionPackageController;
use App\Http\Controllers\AttractionPackageImageController;
use App\Http\Controllers\AttractionPageController;
use App\Http\Controllers\AttractionSubCategoryController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\CulinaryImageController;
use App\Http\Controllers\CulinaryMenuController;
use App\Http\Controllers\CulinaryPageController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HeroimagesController;
use App\Http\Controllers\HotelPageController;
use App\Http\Controllers\LeafletController;
use App\Http\Controllers\LeafletPageController;
use App\Http\Controllers\MapCategoryController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopImageController;
use App\Http\Controllers\ShopPageController;
use App\Http\Controllers\StoryPageController;
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
use App\Http\Controllers\MailController;
use App\Http\Controllers\OverviewsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomImageController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/detailpaketatraksi', function () {return view('/detailpaketatraksi');});

// Route::get('/', [FrontController::class, 'landing'])->name('landing');
Route::get('/', [HomePageController::class, 'index'])->middleware('guest');

Route::get('/faq', [faqPageController::class, 'index'])->middleware('guest');

Route::get('/travels/{travel}/profile', [TravelPageController::class, 'show']);

Route::get('/travels', [TravelMenuPageController::class, 'index'])->middleware('guest');
Route::get('/travels/{travelMenu}', [TravelMenuPageController::class, 'show'])->middleware('guest');

Route::get('/attractions', [AttractionPageController::class, 'index'])->middleware('guest');
Route::get('/attractions/{attraction}', [AttractionPageController::class, 'show'])->middleware('guest');
Route::get('/attractions/{attraction}/packages/{package}', [AttractionPageController::class, 'detailPackage'])->middleware('guest');

Route::get('/hotels', [HotelPageController::class, 'index'])->middleware('guest');
Route::get('/hotels/{hotel}', [HotelPageController::class, 'show'])->middleware('guest');

Route::get('/events', [EventPageController::class, 'index'])->middleware('guest');
Route::get('/events/{event}', [EventPageController::class, 'show'])->middleware('guest');

Route::get('/articles', [ArticlePageController::class, 'index'])->middleware('guest');
Route::get('/articles/{article}', [ArticlePageController::class, 'show'])->middleware('guest');

Route::get('/stories/{story}', [StoryPageController::class, 'show'])->middleware('guest');

Route::get('/culinaries', [CulinaryPageController::class, 'index'])->middleware('guest');
Route::get('/culinaries/{culinary}', [CulinaryPageController::class, 'show'])->middleware('guest');
Route::get('/culinaries/{culinary}/menus', [CulinaryPageController::class, 'menus'])->middleware('guest');

Route::get('/about', [AboutPageController::class, 'index'])->middleware('guest');

Route::get('/shops', [ShopPageController::class, 'index'])->middleware('guest');
Route::get('/shops/{shop}', [ShopPageController::class, 'show'])->middleware('guest');
Route::get('/shops/{shop}/gifts', [ShopPageController::class, 'gifts'])->middleware('guest');

// Sistem Kalkulasi

Route::post('/attractions/{attraction}', [CalculateController::class, 'attraction'])->middleware('guest');
Route::post('/hotels/{hotel}', [CalculateController::class, 'hotel'])->middleware('guest');
Route::post('/culinaries/{culinary}', [CalculateController::class, 'culinary'])->middleware('guest');
Route::post('/culinaries/{culinary}/menus', [CalculateController::class, 'culinary'])->middleware('guest');
Route::post('/travels/{travelMenu}', [CalculateController::class, 'travel'])->middleware('guest');
Route::post('/packages/{package}', [CalculateController::class, 'package'])->middleware('guest');
Route::get('/kalkulator', [CalculateController::class, 'index'])->middleware('guest');
Route::post('/kalkulator', [CalculateController::class, 'store'])->middleware('guest');
Route::delete('/kalkulator/{slug}', [CalculateController::class, 'destroy'])->middleware('guest');
// Route::get('/export-pdf/{id}', [CalculateController::class, 'exportPDF'])->middleware('guest');
// Route::get('/export-pdf/{id}', [CalculateController::class, 'indexPDF']);

Route::get('/maps', [DigitalMapPageController::class, 'index'])->middleware('guest');
// Route::get('/maps', [LeafletPageController::class, 'index'])->middleware('guest');

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
Route::get('/get-subcategories/{categoryId}', [AttractionController::class, 'getSubcategories'])->middleware(['auth', 'super-atraksi']);
Route::resource('/admin/attractions', AttractionController::class)->middleware(['auth', 'admin-atraksi']);
Route::get('/admin/attractions', [AttractionController::class, 'index'])->middleware(['auth', 'super-atraksi']);
Route::get('/admin/attractions/{attraction}', [AttractionController::class, 'show'])->middleware(['auth', 'super-atraksi']);
Route::post('/admin/attraction-images/{id}', [AttractionImageController::class, 'store'])->middleware(['auth', 'admin-atraksi']);
Route::delete('/admin/attraction-images/{id}', [AttractionImageController::class, 'destroy'])->middleware(['auth', 'admin-atraksi'])->name('admin.attractionimages.destroy');

Route::get('/admin/attraction-sub-categories/checkSlug', [AttractionSubCategoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/attraction-sub-categories', AttractionSubCategoryController::class)->except('show')->middleware(['auth', 'superadmin']);
Route::get('/admin/attraction-sub-categories', [AttractionSubCategoryController::class, 'index'])->middleware(['auth', 'super-atraksi']);

Route::get('/admin/attractions/packages/checkSlug', [AttractionPackageController::class, 'checkSlug'])->middleware(['auth', 'admin-atraksi']);
Route::get('/admin/attractions/{attractionSlug}/packages/{attractionPackage}/detail', [AttractionPackageController::class, 'detailPackage'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/attractions/{attractionSlug}/packages', AttractionPackageController::class)->parameters([
    'packages' => 'attraction_package'
])->except(['index'])->middleware(['auth', 'admin-atraksi']);
Route::post('/admin/attractions/{attractionSlug}/package-images/{id}', [AttractionPackageImageController::class, 'store'])->middleware(['auth', 'admin-atraksi']);
Route::delete('/admin/attractions/{attractionSlug}/package-images/{id}', [AttractionPackageImageController::class, 'destroy'])->middleware(['auth', 'admin-atraksi']);

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
Route::get('/admin/hotels/{hotelSlug}/rooms/{hotelRoom}/detail', [HotelRoomController::class, 'detailRoom'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/hotels/{hotelSlug}/rooms', HotelRoomController::class)->parameters([
    'rooms' => 'hotel-room'
])->except(['index'])->middleware(['auth', 'admin-akomodasi']);
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
Route::get('/admin/travels/{travelSlug}/travel-menus/{travelMenu}/detail', [TravelMenuController::class, 'detailPackage'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/travels/{travelSlug}/travel-menus', TravelMenuController::class)->parameters([
    'travel-menus' => 'travel-menu'
])->except(['index'])->middleware(['auth', 'admin-biro']);
Route::post('/admin/travels/{travelSlug}/travel-menu-images/{id}', [TravelMenuImageController::class, 'store'])->middleware(['auth', 'admin-biro']);
Route::delete('/admin/travels/{travelSlug}/travel-menu-images/{id}', [TravelMenuImageController::class, 'destroy'])->middleware(['auth', 'admin-biro']);

// Digital Maps

Route::get('/admin/maps/checkSlug', [DigitalMapController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/maps', DigitalMapController::class)->except('show')->middleware(['auth', 'superadmin']);
Route::get('/admin/maps/digital-map', [DigitalMapController::class, 'mapIndex'])->middleware(['auth', 'superadmin']);

Route::get('/admin/map-categories/checkSlug', [MapCategoryController::class, 'checkSlug'])->middleware(['auth', 'superadmin']);
Route::resource('/admin/map-categories', MapCategoryController::class)->except('show')->middleware(['auth', 'superadmin']);

Route::get('/admin/edit-culinary', function () {
    return view('admin/edit-culinary');
});

Route::get('/admin/transactions', [TransactionController::class, 'index'])->middleware(['auth', 'superadmin']);
Route::get('/admin/transactions/{id}', [TransactionController::class, 'show'])->middleware(['auth', 'superadmin']);
// Route::get('/admin/transactions/detail', function () {
//     return view('admin/transactions/detail');
// });

Route::get('/send/{id}', [MailController::class, 'send']);