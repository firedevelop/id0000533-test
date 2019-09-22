<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');

Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {
    $pages = [
        1 => ['title' => 'from page 1',],
        2 => ['title' => 'from page 2',],];
    $welcomes = [
        1 => '<b>Hello</b> ',
        2 => 'Welcome to '];

    return view('blog-post', [
        'data' => $pages[$id],
        'welcome' => $welcomes[$welcome],
    ]);
});

Route::get('/products/{id_lang}/{id_user}', function ($id_lang, $id_user){
    $lang = [
        1 => ['id_lang' => 'Hola '],
        2 => ['id_lang' => 'Hello '],
    ];
    $user = [
        1 => ['id_user' => 'Jhon '],
        2 => ['id_user' => 'Petter '],
    ];
    return view('products', [
        'data_lang' => $lang[$id_lang],
        'data_user' => $user[$id_user],
    ]);
});

Route::get ('products6/{id_lang}/{id_user}', function($id_lang, $id_usr){
    $lang = [
        1 => ['id_lang' => 'Hello'],
        2 => ['id_lang' => 'Hola'],
    ];
    $user =  {}
});
