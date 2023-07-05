<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\inforCustomerController;
use App\Http\Controllers\inforCustomer2Controller;
use App\Http\Controllers\inforCustomer3Controller;
use App\Http\Controllers\inforCustomer4Controller;
use App\Http\Controllers\lapCustomerController;
use App\Http\Controllers\campaignTamuController;
use App\Events\MessageCreated;
// use Illuminate\Support\Facades\Auth;

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

// Export PDF
Route::get('exportpdf', [AdminController::class, 'exportpdf'])->name('exportpdf');
Route::get('exportpdf1', [inforCustomerController::class, 'exportpdf'])->name('exportpdf');
Route::get('exportpdf2', [inforCustomer2Controller::class, 'exportpdf'])->name('exportpdf');
Route::get('exportpdf3', [inforCustomer3Controller::class, 'exportpdf'])->name('exportpdf');
Route::get('exportpdf4', [inforCustomer4Controller::class, 'exportpdf'])->name('exportpdf');

Route::resource('/admin', AdminController::class);
Route::resource('/admin', AdminController::class);
Route::get('/createTamu', [campaignTamuController::class, 'create']);
Route::post('storeTamu', [campaignTamuController::class, 'store']);

Route::resource('/Souvenir-Biasa', inforCustomerController::class);
Route::resource('/Souvenir-VIP', inforCustomer2Controller::class);
Route::resource('/Souvenir-VVIP', inforCustomer3Controller::class);

Route::resource('/laporanCustomer', lapCustomerController::class);
