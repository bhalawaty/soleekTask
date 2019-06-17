<?php

Route::post('login', 'ApiController@login');

Route::post('register', 'ApiController@register');


Route::group(['middleware' => 'auth.jwt'], function () {

    Route::get('home', 'CountryController@index');

});