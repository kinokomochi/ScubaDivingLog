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

// Route::get('/mypage/{id}', 'MypageController@getUser')->name('mypage');

Route::middleware('auth')->group(function(){

    Route::get('mypage', 'MypageController@index')->name('mypage');

    Route::get('mypage/editImage', 'MypageController@editImage')->name('editImage');

    Route::post('mypage/editImage', 'MypageController@updateImage')->name('updateImage');

    Route::get('mypage/editProfile', 'MypageController@editProfile')->name('editProfile');

    Route::post('mypage/editProfile', 'MypageController@updateProfile')->name('updateProfile');

});