<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('/v1')->namespace('Api\V1')->group(function () {
    Route::get('/users/profile','UserController@profile')->name('profileApi');
    Route::get('/memos','MemoController@index')->name('memosApi');
    Route::post('/memos','MemoController@store')->name('storeMemoApi');
    Route::get('/memos/{memo}','MemoController@show')->name('memoApi');
    Route::patch('/memos/{memo}','MemoController@update')->name('updateMemoApi');
    Route::delete('/memos/{memo}','MemoController@delete')->name('deleteMemoApi');
});
