<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/', function () {
    return view('');
});

Route::get('/profile', function () {    
    return "Admin Page";})
    ->middleware('auth');

    use App\Http\Controllers\UserController;

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/signin', [UserController::class, 'signin']);

Route::get('/signup', function () {
    return view('signup'); // Mengembalikan halaman register
});

Route::get('/signin', function () {
    return view('signin'); // Mengembalikan halaman login
});