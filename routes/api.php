<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\GraveyardController;
use App\Http\Controllers\GraveCategoryController;
use App\Http\Controllers\GraveController;
use App\Http\Controllers\GraveCategoryMappingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HistoricalBurialController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Roles Routes
Route::resource('roles', RoleController::class);

// Users Routes
Route::resource('users', UserController::class);

// Service Providers Routes
Route::resource('service-providers', ServiceProviderController::class);

// Graveyards Routes
Route::resource('graveyards', GraveyardController::class);

// Grave Categories Routes
Route::resource('grave-categories', GraveCategoryController::class);

// Graves Routes
Route::resource('graves', GraveController::class);

// Grave Category Mappings Routes
Route::resource('grave-category-mappings', GraveCategoryMappingController::class);

// Bookings Routes
Route::resource('bookings', BookingController::class);

// Advertisements Routes
Route::resource('advertisements', AdvertisementController::class);

// Reviews Routes
Route::resource('reviews', ReviewController::class);

// Historical Burials Routes
Route::resource('historical-burials', HistoricalBurialController::class);

