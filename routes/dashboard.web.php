<?php

use App\Http\Controllers\Dashboard\BehaviorController;

Route::group(['prefix' => 'dashboard','midlleware' => 'auth','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');

    Route::get('games','GameController@index')->name('dashboard.games');
    Route::post('game','GameController@store');
    Route::get('game/form/{id?}','GameController@form');
    Route::get('games/data','GameController@data');
    Route::get('game/detail/{id}','GameController@show');
    Route::delete('game/{id}','GameController@destroy');

    Route::get('behaviors','BehaviorController@index')->name('dashboard.behaviors');
    Route::post('behavior','BehaviorController@store');
    Route::get('behavior/form/{id?}','BehaviorController@form');
    Route::get('behaviors/data','BehaviorController@data');
    Route::delete('behavior/{id}','BehaviorController@destroy');

});
