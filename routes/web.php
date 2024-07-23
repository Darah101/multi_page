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

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/bloghome', function () {
    return view('bloghome');
});

Route::get('/portfolio-overview', function () {
    return view('portfolio-overview');
});

Route::get('/portfolio-item', function () {
    return view('portfolio-item');
});

Route::get('/home', function () {
    return view('home');
});
