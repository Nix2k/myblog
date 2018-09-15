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


Route::get('/', 'CPost@showAll');

Route::get('/about', function () {	
    $login = (object)['link' => 'login', 'text' => 'Войти'];
    return view('about')->with(['title' => 'О создателе', 'login' => $login]);
});

Route::get('/contact', function () {	
    $login = (object)['link' => 'login', 'text' => 'Войти'];
    return view('contact')->with(['title' => 'Контакты', 'login' => $login]);
});