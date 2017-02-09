<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('shop', 'ProductController@index');
