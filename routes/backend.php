<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route for dashboard
Route::get('/dashboardAdmin',[DashboardController::class,'index']);

//route for dashboard
Route::get('/dashboard_', function () {
    return view('dashboard.User.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//  
require __DIR__.'/auth.php';