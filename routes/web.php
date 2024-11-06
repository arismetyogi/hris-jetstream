<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

  // Route for the getting the data feed
  Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  Route::get('/department', [DepartmentController::class, 'index'])->name('department');

  Route::get('/stores', [StoreController::class, 'index'])->name('stores');

  Route::get('/zips', [ZipController::class, 'index'])->name('zips');

  Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');

  Route::get('/payrolls', [ZipController::class, 'index'])->name('payrolls');

  Route::get('/users', [UserController::class, 'index'])->name('users');

  Route::fallback(function () {
    return view('pages/utility/404');
  });
});
