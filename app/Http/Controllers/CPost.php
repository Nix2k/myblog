<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Post;

class CPost extends Controller
{
    //Получить все посты из БД и отобразить на главной странице
    public function showAll() {
    	$posts = Post::orderBy('id', 'desc')->get();
    	$login = (object)['link' => 'login', 'text' => 'Войти'];
    	return view('main')->with(['title' => 'Главная', 'login' => $login, 'posts' => $posts]);
	}

}
