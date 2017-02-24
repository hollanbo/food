<?php

Route::group(['prefix' => 'hollanbo/food'], function () {
    Route::get('', 'hollanbo\Food\Controllers\FoodController@index');
});

