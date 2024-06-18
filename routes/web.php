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
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AddFundcontroller;


// Route::get('/', function () {
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'frontend'])->name('frontend');
Route::get('/cache-clear', [FrontendController::class, 'cacheClear'])->name('cacheclear');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
    Route::POST('/user/profile/update', [UserProfileController::class, 'userprofileupdate'])->name('userprofileupdate');
    Route::POST('/user/password/update', [UserProfileController::class, 'userpasswordupdated'])->name('userpasswordupdated');
    Route::get('/email/offer', [HomeController::class, 'emailoffer'])->name('email.offer');
    Route::get('/singlemail/offer/{id}', [HomeController::class, 'singlemailoffer'])->name('singlemailoffer');
    Route::POST('/check/email/offer', [HomeController::class, 'checkemailoffer'])->name('checkemailoffer');
    Route::POST('/sponsor_id', [RegisterController::class, 'sponsor_id'])->name('search.sponsor_id');


    Route::get('/logo', [UserProfileController::class, 'logo'])->name('logo');

    Route::get('/generalView', [TeamController::class, 'generalView'])->name('generalView');
    Route::get('/partnerTeam', [TeamController::class, 'partnerTeam'])->name('partnerTeam');
    Route::get('/partnerAdd', [TeamController::class, 'partnerAdd'])->name('partnerAdd');
    Route::post('/teamRegister', [TeamController::class, 'teamRegister'])->name('teamRegister');
    Route::get('/addfund', [AddFundcontroller::class, 'addfund'])->name('addfund');

    Route::resource('category', BusinessSoluton::class);
    Route::resource('goal_category', Goalobjective::class);
    Route::resource('sitelogo', SitelogoController::class);
    Route::resource('businesshere', totalsolutionhere::class);
    Route::resource('ourservices', OurservicesController::class);
});
