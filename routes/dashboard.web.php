<?php

Route::group(['prefix' => 'dashboard','midlleware' => 'web','namespace' => 'Dashboard'], function () {
    Route::get('/', 'HomeDashboardController@index');
    // Route::view('/', 'dashboard.index');
});