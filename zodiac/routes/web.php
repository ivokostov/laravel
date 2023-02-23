<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Zodiac;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('zodiac/{zodiac}/date/{date}', [Zodiac::class, 'single'])->name('single');

Route::get('/page/{page}', [PagesController::class, 'show'])->name('single.page');


