<?php

/* */

use App\Http\Controllers\Homecontroller;

Route::get('/', 'HomeController@showHome')->name('home');
Route::get('/about-us', 'HomeController@showAboutUs')->name('about');
Route::get('product/create', 'ProductController@create')->name('product.add'); 
Route::post('/product/create', 'ProductController@store')->name('product.store');

Route::get('/bedrijven', 'CompanyController@list')->name('company.list');
ROute::get('/bedrijven/{id}','CompanyController@details')->name('company.details');