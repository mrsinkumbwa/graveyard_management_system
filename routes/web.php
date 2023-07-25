<?php

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
use App\Http\Livewire\RegistrationForm; // Import the RegistrationForm Livewire component
use App\Http\Livewire\LoginForm; // Import the LoginForm Livewire component

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RegularUserDashboardController;
use App\Http\Controllers\ServiceProvderDashboardController;
use App\Http\Controllers\SupplierDashboardController;
// Welcome Page Route
Route::get('/', function () {
    return view('dashboard');
});
Route::middleware('auth')->group(function () {
    // Admin dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Regular User dashboard
    Route::get('/regular-user/dashboard', [RegularUserDashboardController::class, 'index'])->name('regular-user.dashboard');

    // Service Provider dashboard
    Route::get('/service-provider/dashboard', [ServiceProviderDashboardController::class, 'index'])->name('service-provider.dashboard');

    // Supplier dashboard
    Route::get('/supplier/dashboard', [SupplierDashboardController::class, 'index'])->name('supplier.dashboard');
});
// Registration and Login Routes using Livewire components
Route::get('/register', RegistrationForm::class)->name('register');
Route::get('/login', LoginForm::class)->name('login');

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

// Login Route (POST method)
Route::post('login', [LoginController::class, 'login'])->name('login');



Route::middleware('auth')->group(function () {
    // Admin dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Regular User dashboard
    Route::get('/regular-user/dashboard', [RegularUserDashboardController::class, 'index'])->name('regular-user.dashboard');

    // Service Provider dashboard
    Route::get('/service-provider/dashboard', [ServiceProviderDashboardController::class, 'index'])->name('service-provider.dashboard');

    // Supplier dashboard
    Route::get('/supplier/dashboard', [SupplierDashboardController::class, 'index'])->name('supplier.dashboard');
});