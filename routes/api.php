<?php

Route::post('login', 'ApiController@login');

Route::post('register', 'ApiController@register');


Route::group(['middleware' => 'auth.jwt'], function () {

    Route::get('logout', 'ApiController@logout');

    Route::get('user', 'ApiController@getAuthUser');

    Route::get('home', 'CountryController@index');

});