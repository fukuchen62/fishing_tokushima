<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// 入門知識関連
Route::get('main/archive_howto', [App\Http\Controllers\KnowledgeController::class, 'archiveHowto'])->name('archive_howto');

Route::get('main/single_howto', [App\Http\Controllers\KnowledgeController::class, 'singleHowto'])->name('single_howto');

// 釣りスポット関連
Route::get('main/archive_spot', [App\Http\Controllers\SpotController::class, 'archiveSpot'])->name('archive_spot');

Route::get('main/archive_area', [App\Http\Controllers\SpotController::class, 'archiveArea'])->name('archive_area');

Route::get('main/single_area', [App\Http\Controllers\SpotController::class, 'singleArea'])->name('single_area');

// 釣具屋関連
Route::get('main/page_shop', [App\Http\Controllers\ShopController::class, 'pageShop'])->name('page_shop');


// Fish関連
Route::get('search_fish', 'App\Http\Controllers\FishController@searchFish');

// Plan関連
Route::get('search_plan', 'App\Http\Controllers\PlanController@searchPlan');

Route::get('single_plan', 'App\Http\Controllers\PlanController@findPlan');

Route::post('single_plan', 'App\Http\Controllers\PlanController@singlePlan');


//Admin関連（news分)

Route::get('back', 'App\Http\Controllers\AdminController@newsShow');

Route::get('back/newsEntry', 'App\Http\Controllers\AdminController@newsEntry');

Route::post('back/newsEntry', 'App\Http\Controllers\AdminController@create');


Route::get('back/newsEdit', 'App\Http\Controllers\AdminController@newsEdit');

Route::post('back/newsEdit', 'App\Http\Controllers\AdminController@update');


Route::get('back/delete', 'App\Http\Controllers\AdminController@delete');

Route::get('back/delete', 'App\Http\Controllers\AdminController@remove');

Route::post('back/delete', 'App\Http\Controllers\AdminController@remove');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * テスト用
 * 福島
 */
Route::get(
    'test/newslist',
    [App\Http\Controllers\TestController::class, 'newsList']
)->name('newslist');

/**
 * ログアウト
 * 福島
 */
Route::get(
    'test/logout',
    [App\Http\Controllers\TestController::class, 'logout']
)->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
