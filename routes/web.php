<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RatingController;

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


Route::get('/',[MainController::class,'index']);
Route::get('/',[MainController::class,'reviewAll']);

// Route Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route Login Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//Route Search
Route::post('/search', [MainController::class, 'search'])->name('search');
Route::get('/search', [MainController::class, 'searchPage']);

// Route News
Route::get('/news', [NewsController::class,'index']);
Route::get('/newsdetail/{id}', [NewsController::class,'newsDetail']);
// Route::get('/newsdetail', [NewsController::class,'newsDetail']);

//Route Review
Route::get('/reviews', [ReviewsController::class,'reviewAll']);
// Route::get('/reviews_detail/{id}', [ReviewsController::class,'toReview']);

///Route Rating
Route::match(['GET', 'POST'], '/add-rating', [RatingController::class,'addRating']);
Route::get('/reviews_detail/{id}', [RatingController::class,'ratings'])->name('reviews_detail');
