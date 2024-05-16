<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
Route::POST('/user/profile/update', [UserProfileController::class, 'userprofileupdate'])->name('userprofileupdate');
Route::POST('/user/password/update', [UserProfileController::class, 'userpasswordupdated'])->name('userpasswordupdated');
Route::get('/email/offer', [HomeController::class, 'emailoffer'])->name('email.offer');
Route::get('/singlemail/offer/{id}', [HomeController::class, 'singlemailoffer'])->name('singlemailoffer');
Route::POST('/check/email/offer', [HomeController::class, 'checkemailoffer'])->name('checkemailoffer');
