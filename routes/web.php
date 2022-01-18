<?php

use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\tourist\TouristAccountController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index']);
Route::get('/about-us', [PagesController::class, 'aboutus']);
Route::get('/contact-us', [PagesController::class, 'contactus']);
Route::post('/create-new-account', [PagesController::class, 'createaccount']);
Route::get('/admin/dashboard', [AdminAccountController::class, 'index'])->name('admin');
Route::get('/tourist/dashboard', [TouristAccountController::class, 'index'])->name('tourist');
Route::prefix('admin')->group(function () {
    Route::get('add-destination', [AdminAccountController::class, 'createdestination']);
    Route::post('store-destination', [AdminAccountController::class, 'storedestination']);
    Route::get('destination-images/{destinationid}', [AdminAccountController::class, 'destinationimages']);
    Route::get('delete-image/{image}', [AdminAccountController::class, 'deleteimage']);
    Route::get('edit-destination/{destinationid}', [AdminAccountController::class, 'editdestination']);
    Route::patch('update-destination/{destinationid}', [AdminAccountController::class, 'updatedestination']);
    Route::get('all-destinations', [AdminAccountController::class, 'alldestinations']);
    Route::get('delete-destination/{destinationid}', [AdminAccountController::class, 'deletedestination']);
    Route::get('add-accomodation', [AdminAccountController::class, 'creteaccomodation']);
    Route::post('store-accomodation', [AdminAccountController::class, 'storeaccomodation']);
    Route::get('all-accomodations', [AdminAccountController::class, 'allaccomodations']);
    Route::get('edit-accomodation/{accid}', [AdminAccountController::class, 'editaccomodation']);
    Route::patch('update-accomodation/{accid}', [AdminAccountController::class, 'updateaccomodation']);
    Route::get('delete-accomodation/{accid}', [AdminAccountController::class, 'deleteaccomodation']);
});
Route::prefix('tourist')->group(function () {
    Route::get('complete-account', [TouristAccountController::class, 'completeprofile']);
    Route::post('finish-account', [TouristAccountController::class, 'finishaccount']);
    Route::get('all-destinations', [TouristAccountController::class, 'alldestinations']);
    Route::get('all-packages', [TouristAccountController::class, 'allpackages']);
    Route::get('all-accomodations', [TouristAccountController::class, 'allaccomodations']);
    Route::get('all-accomodation-bookings', [TouristAccountController::class, 'accomodationbookings']);
    Route::get('book-accomodation/{bookid}', [TouristAccountController::class, 'bookaccomodation']);
    Route::post('book-accomodation-days/{bookid}', [TouristAccountController::class, 'bookingaccomodation']);
    Route::post('upload-accomodation-payments/{bookid}', [TouristAccountController::class, 'uploadaccomodationpayments']);
    Route::get('plan-my-trip', [TouristAccountController::class, 'selectonedestinations']);
    Route::get('select-accomodation/{destinationid}', [TouristAccountController::class, 'selectaccomodation']);
    Route::post('book-selected-accomodation-days/{accomodationid}', [TouristAccountController::class, 'calculatecost']);
    Route::get('planned-trip-payment/{destination}/{accomodation}/{days}/{driver}', [TouristAccountController::class, 'showpayments']);
});

