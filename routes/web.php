<?php

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

Route::get('main/archive_howto', [App\Http\Controllers\MainController::class, 'archiveHowto'])->name('archive_howto');

Route::get('main/single_howto', [App\Http\Controllers\MainController::class, 'singleHowto'])->name('single_howto');

Route::get('main/archive_spot', [App\Http\Controllers\MainController::class, 'archiveSpot'])->name('archive_spot');

Route::get('main/archive_area', [App\Http\Controllers\MainController::class, 'archiveArea'])->name('archive_area');

Route::get('main/single_area', [App\Http\Controllers\MainController::class, 'singleArea'])->name('single_area');

Route::get('main/page_shop', [App\Http\Controllers\MainController::class, 'pageShop'])->name('page_shop');