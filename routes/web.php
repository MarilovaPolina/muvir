<?php

use App\Http\Controllers\ExcursionsController;
use App\Http\Controllers\FunsController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WeddingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// страницы
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/news', [WebController::class, 'news'])->name('news');
Route::get('/weddings', [WebController::class, 'weddings'])->name('weddings');
Route::post('/wedding', [WeddingsController::class, 'create'])->name('createWedding');
Route::get('/house/{id}', [WebController::class, 'house'])->name('house');
Route::get('/excursion/{id}', [WebController::class, 'excursion'])->name('excursion');
Route::get('/new/{id}', [WebController::class, 'new'])->name('new');
Route::get('/products', [WebController::class, 'products'])->name('products'); 
Route::get('/booking/house', [WebController::class, 'bookingHouse'])->name('bookingHouse');
Route::get('/houses', [WebController::class, 'houses'])->name('houses');
Route::post('/house/req', [WebController::class, 'createHouseReq'])->name('createHouseReq');
Route::get('/fun', [WebController::class, 'fun'])->name('fun');
Route::get('/excursions', [WebController::class, 'excursions'])->name('excursions');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/where', [WebController::class, 'where'])->name('where');
Route::get('/map', [WebController::class, 'map'])->name('map');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/production', [WebController::class, 'production'])->name('production');
Route::get('/investor', [WebController::class, 'investor'])->name('investor');



// обработчики для авторизации и выхода
Route::post('/admin/user/auth', [UsersController::class, 'auth'])->name('userAuth');
Route::get('/admin/logout', [UsersController::class, 'logout'])->name('logout');



Route::middleware('checkAuth')->group(function () {
    // для управления услугами
    Route::get('/admin/funs', [WebController::class, 'adminFuns'])->name('adminFuns');
    Route::get('/admin/fun', [WebController::class, 'adminFun'])->name('adminFun');
    Route::get('/admin/change/fun/{id}', [WebController::class, 'adminFunChange'])->name('adminFunChange');
    Route::post('/admin/fun', [FunsController::class, 'create'])->name('createFun');
    Route::patch('/admin/fun', [FunsController::class, 'change'])->name('changeFun');
    Route::delete('/admin/fun', [FunsController::class, 'delete'])->name('deleteFun');



    // для управления мероприятиями
    Route::get('/admin', [WebController::class, 'admin'])->name('admin'); // откр. по ум. после авторизации
    Route::get('/admin/new', [WebController::class, 'adminNew'])->name('adminNew');
    Route::get('/admin/change/post/{id}', [WebController::class, 'adminPostChange'])->name('adminPostChange');
    Route::post('/admin/post', [PostsController::class, 'create'])->name('createPost');
    Route::patch('/admin/post', [PostsController::class, 'change'])->name('changePost');
    Route::delete('/admin/post', [PostsController::class, 'delete'])->name('deletePost');



    // для управления пользователями
    Route::get('/admin/user', [WebController::class, 'adminUser'])->name('adminUser');
    Route::get('/admin/users', [WebController::class, 'adminUsers'])->name('adminUsers');
    Route::get('/admin/change/user/{id}', [WebController::class, 'adminUserChange'])->name('adminUserChange');
    Route::post('/admin/user', [UsersController::class, 'create'])->name('userCreate');
    Route::patch('/admin/user', [UsersController::class, 'change'])->name('userChange');
    Route::delete('/admin/user', [UsersController::class, 'delete'])->name('userDelete');



    // для управления запросами на свадьбу
    Route::get('/admin/weddings', [WebController::class, 'adminWeddings'])->name('adminWeddings');
    Route::delete('/admin/wedding', [WeddingsController::class, 'delete'])->name('deleteWedding');



    // для управления мероприятими и запросами на них
    Route::get('/admin/excursions', [WebController::class, 'adminExcursions'])->name('adminExcursions');
    Route::get('/admin/excursions/req', [WebController::class, 'adminReqExcursions'])->name('adminReqExcursions');
    Route::get('/admin/excursion', [WebController::class, 'adminExcursion'])->name('adminExcursion');
    Route::get('/admin/change/excursion/{id}', [WebController::class, 'adminExcursionChange'])->name('adminExcursionChange');
    Route::patch('/admin/change/excursion', [ExcursionsController::class, 'change'])->name('excursionChange');
    Route::post('/admin/excursion', [ExcursionsController::class, 'create'])->name('createExcursion');
    Route::delete('/admin/excursion/req', [ExcursionsController::class, 'deleteReq'])->name('deleteExcursionReq');
    Route::delete('/admin/excursion', [ExcursionsController::class, 'delete'])->name('deleteExcursion');




    // для управления домиками и запросами на них
    Route::get('/admin/houses/req', [WebController::class, 'adminReqHouses'])->name('adminReqHouses');
    Route::get('/admin/houses', [WebController::class, 'adminHouses'])->name('adminHouses');
    Route::get('/admin/house', [WebController::class, 'adminHouse'])->name('adminHouse');
    Route::get('/admin/change/house/{id}', [WebController::class, 'adminChangeHouse'])->name('adminChangeHouse');
    Route::post('/admin/house', [HousesController::class, 'create'])->name('createHouse');
    Route::patch('/admin/change/house', [HousesController::class, 'change'])->name('changeHouse');
    Route::delete('/admin/house/req', [HousesController::class, 'deleteReq'])->name('deleteHouseReq');
    Route::delete('/admin/house', [HousesController::class, 'delete'])->name('deleteHouse');
});



