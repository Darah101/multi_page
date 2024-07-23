<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', function(){
    return view('product', ['name' =>'shoes']);
});

Route::get('/multi_page', function(){
    return view ('multi_page');
});

Route::get('name/{name?}', function ($name= 'Guest'){
    return('My name is '.$name);
});

Route::get('/about', function () {
    return view('about');
});
