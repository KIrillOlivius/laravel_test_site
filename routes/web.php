<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowRoomsController;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () { return view('welcome'); });

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/rooms' , [ShowRoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{roomType?}' , ShowRoomsController::class);

Route::resource('bookings', BookingController::class);
Route::get('/booking/{booking}', [BookingController::class, 'pdf']);
