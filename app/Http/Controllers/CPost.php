<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Post;
use Myblog\User;

class CPost extends Controller
{
	//Получить все посты из БД и отобразить на главной странице
	public static function showAll() {
		$posts = Post::orderBy('updated_at', 'desc')->get();
		return view('main')->with(['title' => 'Главная', 'login' => User::getLoginForView(), 'posts' => $posts]);
	}

	//Получить пост из БД по его id и отобразить на странице статьи
	public function show($id) {
		$post = Post::where('id', $id)->first();
		return view('article')->with(['title' => $post->title, 'login' => User::getLoginForView(), 'post' => $post]);
	}

}
