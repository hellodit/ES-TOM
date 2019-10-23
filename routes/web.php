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
Auth::routes();
Route::get('/', 'Dashboard\HomeDashboardController@index');

Route::group(['prefix' => 'dashboard','middleware' => 'auth','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');

    Route::get('setting', 'SettingProfileController@index')->name('dashboard.setting');
    Route::post('setting', 'SettingProfileController@store')->name('dashboard.setting.store');
    Route::view('form-changepassword', 'dashboard.setting-account.changepassword');
    Route::post('changepassword', 'SettingProfileController@changePassword');

    Route::get('games','GameController@index')->name('dashboard.games');
    Route::post('game','GameController@store');
    Route::get('game/form/{id?}','GameController@form');
    Route::get('games/data','GameController@data');
    Route::get('game/detail/{id}','GameController@show');
    Route::delete('game/{id}','GameController@destroy');

    Route::get('parameters','ParametersController@index')->name('dashboard.parameters');
    Route::post('parameter','ParametersController@store');
    Route::get('parameter/form/{id?}','ParametersController@form');
    Route::get('parameters/data','ParametersController@data');
    Route::get('parameter/detail/{id}','ParametersController@show');
    Route::delete('parameter/{id}','ParametersController@destroy');
    Route::get('getparam','ParametersController@getParameters');


    Route::get('gameparams','GameParameterController@index')->name('dashboard.gameparam');
    Route::get('gameparam/form/{id?}','GameParameterController@form');
    Route::post('gameparams','GameParameterController@store')->name('save.gameparam');
    Route::delete('gameparam/{id}','GameParameterController@destroy')->name('destroy.gameparam');


    Route::get('rule/importform','RulesController@importform');
    Route::post('import/rule','RulesController@import')->name('dashboard.rules.import');

    Route::get('rules','RulesController@index')->name('dashboard.rules');
    Route::get('rule/form/{id?}','RulesController@form')->name('rules.form');
    Route::post('rule','RulesController@store')->name('save.rule');
    Route::post('rule/edit/{id}','RulesController@edit')->name('edit.rule');
    Route::get('rule/{id?}','RulesController@show');
    Route::delete('rule/{id}','RulesController@destroy')->name('destroy.rule');

    Route::get('consul', 'ConsultationController@index')->name('dashboard.consul');
    Route::post('consul/proses', 'ConsultationController@proses')->name('dashboard.consul.proses');
    Route::get('consul/finish', 'ConsultationController@finish')->name('dashboard.consul.finish');


    // Route::get('behaviors','BehaviorController@index')->name('dashboard.behaviors');
    // Route::post('behavior','BehaviorController@store');
    // Route::get('behavior/form/{id?}','BehaviorController@form');
    // Route::get('behaviors/data','BehaviorController@data');
    // Route::delete('behavior/{id}','BehaviorController@destroy');

    Route::get('users','UserController@index')->name('dashboard.users');
    Route::get('users/data','UserController@data');

});
