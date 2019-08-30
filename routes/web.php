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


    Route::get('setting', 'SettingProfileController@index')->name('dashboard.setting');
    Route::post('setting', 'SettingProfileController@store')->name('dashboard.setting.store');
    Route::view('form-changepassword', 'dashboard.setting-account.changepassword');
    Route::post('changepassword', 'SettingProfileController@changePassword');
});
