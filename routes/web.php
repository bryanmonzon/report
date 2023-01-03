<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DailyReportController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

    Route::get('/weight', [WeightController::class, 'index'])->name('weight');

    Route::get('/daily-report/today', [DailyReportController::class, 'show'])->name('daily-report.today');
});


