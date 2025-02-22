<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// | 商品一覧 | /products |
// | --- | --- |
// | 商品詳細 | /products/{productId} |
// | 商品更新 | /products/{productId}/update |
// | 商品登録 | /products/register |
// | 検索 | /products/search |
// | 削除 | /products/{productId}/delete |

Route::get('/products',[ProductController::class,'index'] );   //一覧画面
Route::get('/products/register',[ProductController::class,'create'] );  //登録画面
Route::post('/products/register',[ProductController::class,'store'] ); //登録処理
Route::get('/products/{productId}',[ProductController::class,'edit'] );  //編集画面
Route::post('/products/{productId}/update',[ProductController::class,'update'] );  //更新処理
Route::post('/products/{productId}/delete',[ProductController::class,'delete'] );  //削除