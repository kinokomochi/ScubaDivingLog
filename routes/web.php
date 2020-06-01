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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/indexUser', 'UserController@indexUser')->name('indexUser');

Route::middleware('auth')->group(function(){

    Route::get('mypage/editImage', 'MypageController@editImage')->name('editImage');

    Route::post('mypage/editImage', 'MypageController@updateImage')->name('updateImage');

    Route::get('mypage/editProfile', 'MypageController@editProfile')->name('editProfile');

    Route::post('mypage/editProfile', 'MypageController@updateProfile')->name('updateProfile');

    Route::get('diary/createDiary', 'DiaryController@createDiary')->name('createDiary');

    Route::post('diary/createDiary', 'DiaryController@createDiaryImg')->name('createDiaryImg');

    Route::post('diary/createDiaryImg', 'DiaryController@storeDiary')->name('storeDiary');

    Route::get('diary/editDiary/{id}', 'DiaryController@editDiary')->name('editDiary');

    Route::post('diary/editDiary/{id}', 'DiaryController@updateDiary')->name('updateDiary');

    Route::get('diary/deleteDiary/{id}','DiaryController@deleteDiary' )->name('deleteDiary');

    Route::post('diary/deleteDiary/{id}', 'DiaryController@destroyDiary')->name('destroyDiary');

    Route::get('diary/editDiaryImg/{id}', 'DiaryController@editDiaryImg')->name('editDiaryImg');

    Route::post('diary/editDiaryImg/{id}', 'DiaryController@updateDiaryImg')->name('updateDiaryImg');

    Route::get('user/deleteUser', 'UserController@deleteUser')->name('deleteUser');

    Route::post('user/deleteUser', 'UserController@destroyUser')->name('destroyUser');

    Route::get('list/indexList', 'ToDoListController@indexList')->name('indexList');

    Route::get('list/postList', 'ToDoListController@createList')->name('createList');

    Route::post('list/postList', 'ToDoListController@postList')->name('postList');

    Route::post('list/indexList', 'ToDoListController@deleteList')->name('deleteList');


});

Route::get('/stream', 'streamController@stream')->name('stream');

Route::get('diary/indexDiary', 'DiaryController@indexDiary')->name('indexDiary');

Route::get('diary/showDiary/{id}', 'DiaryController@showDiary')->name('showDiary');

Route::get('shop/showShop/{id}', 'ShopController@showShop')->name('showShop');

Route::get('shop/searchShop', 'ShopController@searchShop')->name('searchShop');

Route::get('mypage/{id}', 'MypageController@mypage')->name('mypage');
