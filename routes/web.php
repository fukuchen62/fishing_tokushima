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
Route::get('knowledge_list', [App\Http\Controllers\KnowledgeController::class, 'knowledgeList'])->name('knowledge_list');

Route::get('knowledge_info', [App\Http\Controllers\KnowledgeController::class, 'knowledgeInfo'])->name('knowledge_info');

// 釣りスポット関連
Route::get('spots_list', [App\Http\Controllers\SpotController::class, 'spotList'])->name('spots_list');

// Route::get('main/archive_area', [App\Http\Controllers\SpotController::class, 'archiveArea'])->name('archive_area');

Route::get('spots_info', [App\Http\Controllers\SpotController::class, 'spotInfo'])->name('spots_info');

// 釣具屋関連
Route::get('shops_list', [App\Http\Controllers\ShopController::class, 'shopList'])->name('shops_list');


// Fish関連
Route::get('fish_list', [App\Http\Controllers\FishController::class, 'searchFish'])->name('fish_list');

Route::get('fish_info', [App\Http\Controllers\FishController::class, 'singleFish'])->name('fish_info');

// Plan関連
Route::get('plans_list', [App\Http\Controllers\PlanController::class, 'searchPlan'])->name('plans_list');

// Route::get('single_plan', 'App\Http\Controllers\PlanController@findPlan');

Route::get('plans_info', [App\Http\Controllers\PlanController::class, 'singlePlan'])->name('plans_info');

//Admin関連（spot分)

// Route::get('', 'App\Http\Controllers\AdminController@spotSearch');

// Route::get('', 'App\Http\Controllers\AdminController@spotShow');

// Route::get('', 'App\Http\Controllers\AdminController@spotEdit');

// Route::get('', 'App\Http\Controllers\AdminController@spotUpdate');

//Admin関連（knowledge分)

Route::get('knowledge_show', 'App\Http\Controllers\AdminController@knowledgeShow');

Route::get('cms/knowledge_entry', 'App\Http\Controllers\AdminController@knowledgeEntry');

Route::post('cms/knowledge_entry', 'App\Http\Controllers\AdminController@knowledgeCreate');



Route::get('cms/knowledge_edit', 'App\Http\Controllers\AdminController@knowledgeEdit');

Route::post('cms/knowledge_edit', 'App\Http\Controllers\AdminController@knowledgeUpdate');


Route::get('cms/knowledge_delete', 'App\Http\Controllers\AdminController@knowledgeDelete');

Route::get('cms/knowledge_delete', 'App\Http\Controllers\AdminController@knowledgeRemove');

Route::post('cms/knowledge_delete', 'App\Http\Controllers\AdminController@knowledgeRemove');


//Admin関連（news分)

Route::get('news_show', 'App\Http\Controllers\AdminController@newsShow');

Route::get('cms/news_entry', 'App\Http\Controllers\AdminController@newsEntry');

Route::post('cms/news_entry', 'App\Http\Controllers\AdminController@newsCreate');


Route::get('cms/news_edit', 'App\Http\Controllers\AdminController@newsEdit');

Route::post('cms/news_edit', 'App\Http\Controllers\AdminController@newsUpdate');


Route::get('cms/news_delete', 'App\Http\Controllers\AdminController@newsDelete');

Route::get('cms/news_delete', 'App\Http\Controllers\AdminController@newsRemove');

Route::post('cms/news_delete', 'App\Http\Controllers\AdminController@newsRemove');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Info関連(news)
Route::get('archive_info', 'App\Http\Controllers\InfoController@archiveInfo');

Route::get('single_info', 'App\Http\Controllers\InfoController@singleInfo');

// Info関連(evacuation)
Route::get('page_escape', 'App\Http\Controllers\InfoController@pageEscape');


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