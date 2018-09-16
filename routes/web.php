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
use Myblog\User;

Route::get('/', 'CPost@showAll');

Route::get('/about', function () {
    return view('about')->with(['title' => 'О создателе', 'login' => User::getLoginForView()]);
});

Route::get('/contact', function () {
    return view('contact')->with(['title' => 'Контакты', 'login' => User::getLoginForView()]);
});

Route::get('/user/login', function () {
    return view('login')->with(['title' => 'Вход', 'login' => User::getLoginForView()]);
});

Route::get('/user/login_error', function () {
    return view('login_error')->with(['title' => 'Ошибка входа', 'login' => User::getLoginForView()]);
});

Route::get('/user/auth', 'CUser@auth');

Route::get('/user/logout', 'CUser@logout');

Route::get('/post/{id}', 'CPost@show');

Route::get('/admin', 'CAdmin@showPosts');

Route::get('/admin/posts', 'CAdmin@showPosts');
Route::get('/admin/post/edit/{id}', 'CAdmin@editPost');
Route::any('/admin/post/apply', 'CAdmin@applyPost');
Route::get('/admin/post/delete/{id}', 'CAdmin@deletePost');
Route::get('/admin/post/new', 'CAdmin@newPost');
Route::any('/admin/post/add', 'CAdmin@addPost');

Route::get('/admin/messages', 'CMessage@showAll');
Route::any('/admin/messages/add', 'CMessage@add');