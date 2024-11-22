<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerRegistrationsController;

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

Route::get('/', function () {
    return view('welcome');
})->name('user.home');

// Player Registration Routes
// Route::prefix('registration')->group(function () {
    // Route::get('/', [PlayerRegistrationsController::class, 'create'])->name('registration.create');
    Route::post('/', [PlayerRegistrationsController::class, 'store'])->name('registration.store');
    Route::get('/success', [PlayerRegistrationsController::class, 'success'])->name('registration.success');
// });

// Route::post('/', function () {
//     return dd('done');
// })->name('registration.store');