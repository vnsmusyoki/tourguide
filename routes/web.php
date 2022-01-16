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
Route::get('/admin/dashboard', [AdminAccountController::class, 'index'])->name('admin');
Route::prefix('admin')->group(function(){
    Route::get('add-destination', [AdminAccountController::class, 'createdestination']);
    Route::get('store-destination', [AdminAccountController::class, 'storedestination']);
});
