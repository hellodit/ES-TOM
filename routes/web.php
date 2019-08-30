<?php

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

Route::get('/','Auth\loginController@showLoginForm');

Auth::routes();
Route::get('/dashboard', 'HomeDashboardController@index')->middleware('auth');

Route::group(['prefix' => 'dashboard','middleware' => 'auth','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');
    Route::get('games','GameController@index')->name('dashboard.games');
    Route::post('game','GameController@store');
    Route::get('game/form/{id?}','GameController@form');
    Route::get('games/data','GameController@data');
    Route::get('game/detail/{id}','GameController@show');
    Route::delete('game/{id}','GameController@destroy');

    Route::get('setting', 'SettingProfileController@index')->name('dashboard.setting');
    Route::post('setting', 'SettingProfileController@store')->name('dashboard.setting.store');
    Route::view('form-changepassword', 'dashboard.setting-account.changepassword');
    Route::post('changepassword', 'SettingProfileController@changePassword');
});
