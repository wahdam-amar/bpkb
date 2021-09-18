<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\TestMenu;
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
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'main'])->name('dashboard');
    Route::resource('vehicle', VehicleController::class);
});



require __DIR__ . '/auth.php';
