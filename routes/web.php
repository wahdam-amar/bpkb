<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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
})->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'main'])->name('dashboard');
    Route::resource('vehicle', VehicleController::class);
    Route::resource('person', PersonController::class);
    Route::resource('template', TemplateController::class);

    Route::get('logs', [VehicleController::class, 'histories'])->name('vehicle.histories');
});

Route::middleware(['web'])->group(function () {
    Route::resource('feedback', FeedbackController::class);
});

require __DIR__.'/auth.php';
