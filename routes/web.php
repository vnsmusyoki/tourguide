<?php

use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\PagesController;
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
