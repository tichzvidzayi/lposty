<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::view('/app', '/layouts/app');

Route::view('/index', '/posts/index');