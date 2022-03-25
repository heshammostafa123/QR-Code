<?php

use App\Http\Controllers\QrController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/', [QrController::class, 'index'])->name('qr_builder');

Route::post('/qr-builder',[QrController::class,'do_qr_builder'])->name('do_qr_builder');

Route::get('/phone', [QrController::class, 'phone'])->name('qr_phone');
Route::get('/email', [QrController::class, 'email'])->name('qr_email');
Route::get('/geo', [QrController::class, 'geo'])->name('qr_geo');
Route::get('/sms', [QrController::class, 'sms'])->name('qr_sms');