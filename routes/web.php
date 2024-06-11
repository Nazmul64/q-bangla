<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BusinessSoluton;
use App\Http\Controllers\Goalobjective;
use App\Http\Controllers\SitelogoController;
use App\Http\Controllers\totalsolutionhere;
use App\Http\Controllers\OurservicesController;
// Route::get('/', function () {
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'frontend'])->name('frontend');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
Route::POST('/user/profile/update', [UserProfileController::class, 'userprofileupdate'])->name('userprofileupdate');
Route::POST('/user/password/update', [UserProfileController::class, 'userpasswordupdated'])->name('userpasswordupdated');
Route::get('/email/offer', [HomeController::class, 'emailoffer'])->name('email.offer');
Route::get('/singlemail/offer/{id}', [HomeController::class, 'singlemailoffer'])->name('singlemailoffer');
Route::POST('/check/email/offer', [HomeController::class, 'checkemailoffer'])->name('checkemailoffer');
Route::get('/logo', [UserProfileController::class, 'logo'])->name('logo');

Route::resource('category', BusinessSoluton::class);
Route::resource('goal_category', Goalobjective::class);
Route::resource('sitelogo', SitelogoController::class);
Route::resource('businesshere', totalsolutionhere::class);
Route::resource('ourservices', OurservicesController::class);
