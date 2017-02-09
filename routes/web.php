<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('shop', 'ProductController@index');

Route::get('category/{category}', 'CategoryController@show')->name('category.show');
