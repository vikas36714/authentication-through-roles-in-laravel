<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;

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

Route::get('/', function () {
	Auth::guard('web')->logout();
    Auth::logout();
    return view('welcome');
});

Route::get('/admin', function () {
	Auth::guard('web')->logout();
    Auth::logout();
    return view('auth.login');
});


// Admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin/dashboard'], function () {
	
	Route::get('/', [DashboardController::class, 'index'])->name('admin_dashboard');
        
});

//---------------------------------------------------------------------------------------//

// Seller protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'seller/dashboard'], function () {
    
	Route::get('/', [SellerDashboardController::class, 'index'])->name('seller_dashboard');
    
});

require __DIR__.'/auth.php';
