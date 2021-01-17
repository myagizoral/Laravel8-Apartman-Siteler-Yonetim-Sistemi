<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
Route::post( '/getcontent',[HomeController::class,'getcontent'])->name('getcontent');
Route::get( '/contentlist/{search}',[HomeController::class,'contentlist'])->name('contentlist');

>>>>>>> Stashed changes
=======
Route::post( '/getcontent',[HomeController::class,'getcontent'])->name('getcontent');
Route::get( '/contentlist/{search}',[HomeController::class,'contentlist'])->name('contentlist');

>>>>>>> Stashed changes
=======
Route::post( '/getcontent',[HomeController::class,'getcontent'])->name('getcontent');
Route::get( '/contentlist/{search}',[HomeController::class,'contentlist'])->name('contentlist');

>>>>>>> Stashed changes
=======
Route::get( '/payments/{contentid}/{useridx}',[UserController::class,'payments'])->name('payments');
Route::post( '/paymentssave/{price}/{user_id}',[UserController::class,'paymentssave'])->name('paymentssave');
Route::get( '/paymentslist',[UserController::class,'paymentslist'])->name('paymentslist');

Route::post( '/getcontent',[HomeController::class,'getcontent'])->name('getcontent');
Route::get( '/contentlist/{search}',[HomeController::class,'contentlist'])->name('contentlist');

>>>>>>> Stashed changes
Route::get( '/home',[HomeController::class,'index'])->name('homepage');
Route::get( '/',[HomeController::class,'index'])->name('home');
Route::get( '/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get( '/references',[HomeController::class,'references'])->name('references');
Route::get( '/faq',[HomeController::class,'faq'])->name('faq');
Route::get( '/contact',[HomeController::class,'contact'])->name('contact');

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream

<<<<<<< Updated upstream
=======
Route::post( '/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
Route::get( '/content/{id}/{slug}',[HomeController::class,'content'])->name('content');


Route::post( '/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
Route::get( '/content/{id}/{slug}',[HomeController::class,'content'])->name('content');
Route::get( '/categorycontents/{id}/{slug}',[HomeController::class,'categorycontents'])->name('categorycontents');

Route::post( '/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
Route::get( '/content/{id}/{slug}',[HomeController::class,'content'])->name('content');
Route::get( '/categorycontents/{id}/{slug}',[HomeController::class,'categorycontents'])->name('categorycontents');
Route::get( '/addtocart/{id}',[HomeController::class,'addtocart'])->name('addtocart');

Route::post( '/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
Route::get( '/content/{id}/{slug}',[HomeController::class,'content'])->name('content');
Route::get( '/categorycontents/{id}/{slug}',[HomeController::class,'categorycontents'])->name('categorycontents');
//Route::get( '/addtocart/{id}',[HomeController::class,'addtocart'])->name('addtocart');

Route::post( '/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');

>>>>>>> Stashed changes
//Route::get('/', function () {
  //  return view('home.index');
//});

//Route::get( '/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get( '/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post( '/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get( '/logout',[HomeController::class,'logout'])->name('logout');
Route::get( '/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware(['auth']);

Route::get('/welcome', function () {
    return view('welcome');
});

//admin menu
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get( '/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

    Route::get( '/menu',[\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_menu');
    Route::get( '/menu/add',[\App\Http\Controllers\Admin\MenuController::class,'add'])->name('admin_menu_add');
    Route::get( '/menu/edit/{id}',[\App\Http\Controllers\Admin\MenuController::class,'edit'])->name('admin_menu_edit');
    Route::post( '/menu/create',[\App\Http\Controllers\Admin\MenuController::class,'create'])->name('admin_menu_create');
    Route::post( '/menu/update/{id}',[\App\Http\Controllers\Admin\MenuController::class,'update'])->name('admin_menu_update');
    Route::get( '/menu/delete/{id}',[\App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('admin_menu_delete');
    Route::get( '/menu/show',[\App\Http\Controllers\Admin\MenuController::class,'show'])->name('admin_menu_show');

    //contents
    Route::prefix('content')->group(function() {

        Route::get( '/',[\App\Http\Controllers\Admin\ContentController::class,'index'])->name('admin_contents');
        Route::get( 'create',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_add');
        Route::post( 'store',[\App\Http\Controllers\Admin\ContentController::class,'store'])->name('admin_content_store');
        Route::get( 'edit/{id}',[\App\Http\Controllers\Admin\ContentController::class,'edit'])->name('admin_content_edit');
        Route::post( 'update/{id}',[\App\Http\Controllers\Admin\ContentController::class,'update'])->name('admin_content_update');
        Route::get( 'delete/{id}',[\App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('admin_content_delete');
        Route::get( 'show',[\App\Http\Controllers\Admin\ContentController::class,'show'])->name('admin_content_show');
    });

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    //FAq
    Route::prefix('faq')->group(function() {

        Route::get( '/',[\App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
        Route::get( 'create',[\App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_add');
        Route::post( 'store',[\App\Http\Controllers\Admin\FaqController::class,'store'])->name('admin_faq_store');
        Route::get( 'edit/{id}',[\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post( 'update/{id}',[\App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
        Route::get( 'delete/{id}',[\App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get( 'show',[\App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
    });

<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    //messages
    Route::prefix('messages')->group(function() {

        Route::get( '/',[MessageController::class,'index'])->name('admin_message');
        Route::get( 'edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post( 'update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get( 'delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get( 'show',[MessageController::class,'show'])->name('admin_message_show');
    });

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    //reviews
    Route::prefix('review')->group(function() {
        Route::get( '/',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
        Route::post( 'update/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('admin_review_update');
        Route::get( 'delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get( 'show/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'show'])->name('admin_review_show');
    });

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
//image gallery
    Route::prefix('image')->group(function() {
        Route::get( 'create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post( 'store/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get( 'delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get( 'show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

//Setting
    Route::get( 'setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post( 'setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
});



Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get( '/',[UserController::class,'index'])->name('myprofile');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
    Route::get( '/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get( 'destroymyreviews/{id}',[UserController::class,'destroymyreviews'])->name('user_review_delete');
=======
    Route::get( '/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get( 'destroymyreviews/{id}',[UserController::class,'destroymyreviews'])->name('user_review_delete');
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
>>>>>>> Stashed changes
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
>>>>>>> Stashed changes
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
    Route::get( '/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get( 'destroymyreviews/{id}',[UserController::class,'destroymyreviews'])->name('user_review_delete');
>>>>>>> Stashed changes
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
    Route::get( '/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get( 'destroymyreviews/{id}',[UserController::class,'destroymyreviews'])->name('user_review_delete');
>>>>>>> Stashed changes
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
});



Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get( '/',[UserController::class,'index'])->name('myprofile');
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get( '/profile',[UserController::class,'index'])->name('userprofile');
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
});



Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get( '/',[UserController::class,'index'])->name('myprofile');
>>>>>>> Stashed changes
});


