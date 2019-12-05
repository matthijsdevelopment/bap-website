<?php

/* */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/matthijs', function () {
    return view('matthijs');
});