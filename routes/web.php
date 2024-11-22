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


Route::post('/', [PlayerRegistrationsController::class, 'store'])->name('registration.store');
Route::get('/success', [PlayerRegistrationsController::class, 'success'])->name('registration.success');
Route::post('/update-payment-status', [PlayerRegistrationsController::class, 'updatePaymentStatus'])->name('registration.updatePaymentStatus');
Route::post('/delete-record', [PlayerRegistrationsController::class, 'destroy'])->name('registration.delete');

Route::get('/export', [PlayerRegistrationsController::class, 'export'])->name('registration.export');
