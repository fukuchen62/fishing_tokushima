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

/**
 * トップページへのルート情報
 */
Route::get('main/', [App\Http\Controllers\MainController::class, 'index'])->name('toppage');

Auth::routes();
// 入門知識関連
Route::get('knowledge/knowledgelist', [App\Http\Controllers\KnowledgeController::class, 'knowledgeList'])->name('knowledgelist');

Route::get('knowledge/knowledgeinfo', [App\Http\Controllers\KnowledgeController::class, 'knowledgeInfo'])->name('knowledgeinfo');

// 釣りスポット関連
Route::get('spot/spotlist', [App\Http\Controllers\SpotController::class, 'spotList'])->name('spotslist');


Route::get('spot/spotinfo', [App\Http\Controllers\SpotController::class, 'spotInfo'])->name('spotsinfo');

// 釣具屋関連
Route::get('shop/shoplist', [App\Http\Controllers\ShopController::class, 'shopList'])->name('shopslist');


// Fish関連
Route::get('fish/fishlist', [App\Http\Controllers\FishController::class, 'fishList'])->name('fishlist');

Route::get('fish/fishlist', [App\Http\Controllers\FishController::class, 'fishFind'])->name('fishlist');

Route::post('fish/fishlist', [App\Http\Controllers\FishController::class, 'fishSearch'])->name('fishlist');

Route::get('fish/fishinfo', [App\Http\Controllers\FishController::class, 'fishInfo'])->name('fishinfo');



// Plan関連
Route::get('plan/planlist', [App\Http\Controllers\PlanController::class, 'plansList'])->name('planlist');

// Route::get('single_plan', 'App\Http\Controllers\PlanController@findPlan');

Route::get('plan/planinfo', [App\Http\Controllers\PlanController::class, 'plansInfo'])->name('planinfo');

//Admin関連（spot分)

// Route::get('', 'App\Http\Controllers\AdminController@spotSearch');

// Route::get('', 'App\Http\Controllers\AdminController@spotShow');

// Route::get('', 'App\Http\Controllers\AdminController@spotEdit');

// Route::get('', 'App\Http\Controllers\AdminController@spotUpdate');

//Admin関連（knowledge分)

Route::get('admin/knowledgeshow', [App\Http\Controllers\AdminController::class, 'knowledgeShow'])->name('knowledgeshow');
Route::get('admin/knowledgeentry', [App\Http\Controllers\AdminController::class, 'knowledgeEntry'])->name('knowledgeentry');
Route::post('admin/knowledgeentry', [App\Http\Controllers\AdminController::class, 'knowledgeCreate'])->name('knowledgecreate');

Route::get('admin/knowledgedelete', [App\Http\Controllers\AdminController::class, 'knowledgeDelete'])->name('knowledgedelete');
Route::get('admin/knowledgedelete', [App\Http\Controllers\AdminController::class, 'knowledgeRemove'])->name('knowledgeremove');
Route::post('admin/knowledgedelete', [App\Http\Controllers\AdminController::class, 'knowledgeRemove'])->name('knowledgeremove');


//Admin関連（news分)

Route::get('admin/newsshow', [App\Http\Controllers\AdminController::class, 'newsShow'])->name('newsshow');
Route::get('admin/newsentry', [App\Http\Controllers\AdminController::class, 'newsEntry'])->name('newsentry');
Route::post('admin/newsentry', [App\Http\Controllers\AdminController::class, 'newsCreate'])->name('newscreate');


Route::get('admin/newsedit', [App\Http\Controllers\AdminController::class, 'newsEdit'])->name('newsedit');
Route::post('admin/newsedit', [App\Http\Controllers\AdminController::class, 'newsUpdate'])->name('newsupdate');


Route::get('admin/newsdelete', [App\Http\Controllers\AdminController::class, 'newsDelete'])->name('newsdelete');
Route::get('admin/newsdelete', [App\Http\Controllers\AdminController::class, 'newsRemove'])->name('newsremove');
Route::post('admin/newsdelete', [App\Http\Controllers\AdminController::class, 'newsRemove'])->name('newsremove');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Info関連(news)
Route::get('admin/newslist', [App\Http\Controllers\NewsController::class, 'archiveInfo'])->name('newslist');
Route::get('admin/newsinfo', [App\Http\Controllers\NewsController::class, 'singleInfo'])->name('newsinfo');

// Info関連(evacuation)
Route::get('admin/escapelist', [App\Http\Controllers\NewsController::class, 'pageEscape'])->name('escapelist');


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
