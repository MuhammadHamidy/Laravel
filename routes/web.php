<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Signin', function () {
    return view('signin');
});

Route::get('/Signup', function () {
    return view('signup');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/makanan', function ($name = 'Makanan') {
    return "Blog tentang -" . $name;
});

Route::get('/category/jajanan', function ($name = 'pukis') {
    return "Category : " . $name;
});

Route::get('/author/hamid', function ($name = 'Hamidy') {
    return "Author : " . $name;
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});