<?php

use App\Http\Controllers\Apps\DashboardController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Route::get('/', [DashboardController::class, 'registration']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::group(['prefix' => '/'], function () {
//     Route::get('dashboard', [App\Http\Controllers\Apps\DashboardController::class, 'index'])->name('apps.dashboard.index');
//     Route::get('registration', [App\Http\Controllers\Apps\DashboardController::class, 'registration'])->name('apps.dashboard.registration');
//     Route::get('checkin', [App\Http\Controllers\Apps\DashboardController::class, 'checkin'])->name('apps.dashboard.checkin');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/registration', [DashboardController::class, 'registration'])->name('registration');
Route::get('/check-in', action: [DashboardController::class, 'checkin'])->name('checkin');