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
 *
 * URL部分'/'に直す
 */
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('top');
/**
 * マイページへのルート情報
 */
Route::get('/mypage', [App\Http\Controllers\MainController::class, 'myPageShow'])->name('mypage');

Route::post('/mypage', [App\Http\Controllers\MainController::class, 'myPage'])->name('mypage');
/**
 * 管理画面TOPへのルート情報
 */
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminTop'])->name('admintop');

Auth::routes();
// 入門知識関連
Route::get('knowledge/list', [App\Http\Controllers\KnowledgeController::class, 'knowledgeList'])->name('knowledgelist');

Route::get('knowledge/info', [App\Http\Controllers\KnowledgeController::class, 'knowledgeInfo'])->name('knowledgeinfo');

// 釣りスポット関連
Route::get('spot/list', [App\Http\Controllers\SpotController::class, 'spotList'])->name('spotslist');


Route::get('spot/info', [App\Http\Controllers\SpotController::class, 'spotInfo'])->name('spotsinfo');

// 釣具屋関連
Route::get('shop/list', [App\Http\Controllers\ShopController::class, 'shopList'])->name('shopslist');


// Fish関連
Route::get('fish/list', [App\Http\Controllers\FishController::class, 'fishList'])->name('fishlist');

Route::get('fish/info', [App\Http\Controllers\FishController::class, 'fishInfo'])->name('fishinfo');



// Plan関連
Route::get('plan/list', [App\Http\Controllers\PlanController::class, 'plansList'])->name('planlist');

Route::post('plan/list', [App\Http\Controllers\PlanController::class, 'plansSearch'])->name('planlist');

Route::get('plan/info', [App\Http\Controllers\PlanController::class, 'plansInfo'])->name('planinfo');

//Admin関連（spot分)

Route::get('admin/spotsearch', [App\Http\Controllers\AdminController::class, 'spotSearch'])->name('spotsearch');
Route::get('admin/spotsshow', [App\Http\Controllers\AdminController::class, 'spotsShow'])->name('spotsshow');
Route::get('admin/spotsedit', [App\Http\Controllers\AdminController::class, 'spotsEdit'])->name('spotsedit');
Route::post('admin/spotsedit', [App\Http\Controllers\AdminController::class, 'spotsUpdate'])->name('spotsupdate');

//Admin関連（shop分)

Route::get('admin/shopsearch', [App\Http\Controllers\AdminController::class, 'shopSearch'])->name('shopsearch');
Route::get('admin/shopsshow', [App\Http\Controllers\AdminController::class, 'shopsShow'])->name('shopsshow');
Route::get('admin/shopsedit', [App\Http\Controllers\AdminController::class, 'shopsEdit'])->name('shopsedit');
Route::post('admin/shopsedit', [App\Http\Controllers\AdminController::class, 'shopsUpdate'])->name('shopsupdate');

//Admin関連（plan分)

Route::get('admin/plansearch', [App\Http\Controllers\AdminController::class, 'planSearch'])->name('plansearch');
Route::get('admin/planshow', [App\Http\Controllers\AdminController::class, 'planShow'])->name('planshow');
Route::post('admin/planentry', [App\Http\Controllers\AdminController::class, 'planCreate'])->name('plancreate');
Route::get('admin/planedit', [App\Http\Controllers\AdminController::class, 'planEdit'])->name('planedit');
Route::post('admin/planupdate', [App\Http\Controllers\AdminController::class, 'planUpdate'])->name('planupdate');
Route::get('admin/planentry', [App\Http\Controllers\AdminController::class, 'planEntry'])->name('planentry');

// Route::post('admin/planedit', [App\Http\Controllers\AdminController::class, 'planCreate'])->name('plancreate');


//Admin関連（knowledge分)

Route::get('admin/knowledgeshow', [App\Http\Controllers\AdminController::class, 'knowledgeShow'])->name('knowledgeshow');
Route::get('admin/knowledgeentry', [App\Http\Controllers\AdminController::class, 'knowledgeEntry'])->name('knowledgeentry');
Route::post('admin/knowledgeentry', [App\Http\Controllers\AdminController::class, 'knowledgeCreate'])->name('knowledgecreate');

Route::get('admin/knowledgeedit', [App\Http\Controllers\AdminController::class, 'knowledgeEdit'])->name('knowledgeedit');
Route::post('admin/knowledgeedit', [App\Http\Controllers\AdminController::class, 'knowledgeUpdate'])->name('knowledgeupdate');

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

//Admin関連（fish分)

Route::get('admin/fishshow', [App\Http\Controllers\AdminController::class, 'fishShow'])->name('fishshow');
Route::get('admin/fishentry', [App\Http\Controllers\AdminController::class, 'fishEntry'])->name('fishentry');
Route::post('admin/fishentry', [App\Http\Controllers\AdminController::class, 'fishCreate'])->name('fishcreate');


Route::get('admin/fishedit', [App\Http\Controllers\AdminController::class, 'fishEdit'])->name('fishedit');
Route::post('admin/fishedit', [App\Http\Controllers\AdminController::class, 'fishUpdate'])->name('fishupdate');


Route::get('admin/fishdelete', [App\Http\Controllers\AdminController::class, 'fishDelete'])->name('fishdelete');
Route::get('admin/fishdelete', [App\Http\Controllers\AdminController::class, 'fishRemove'])->name('fishremove');
Route::post('admin/fishdelete', [App\Http\Controllers\AdminController::class, 'fishRemove'])->name('fishremove');



// Info関連(news)
Route::get('news/list', [App\Http\Controllers\NewsController::class, 'newsList'])->name('newslist');
Route::get('news/info', [App\Http\Controllers\NewsController::class, 'newsInfo'])->name('newsinfo');

// Info関連(evacuation)
Route::get('news/escapelist', [App\Http\Controllers\NewsController::class, 'escapeList'])->name('escapelist');


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
