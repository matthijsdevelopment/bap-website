<?php

/* */

use App\Http\Controllers\Homecontroller;

Route::get('/', 'HomeController@showHome');
Route::get('/about-us', 'HomeController@showAboutUs');
