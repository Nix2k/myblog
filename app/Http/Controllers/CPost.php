<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Post;
use Myblog\User;

class CPost extends Controller
{
	//Получить посты из БД и отобразить на главной странице, постранично
	public static function showAll() {
		if (isset($_GET["page"])) {
			$page = strip_tags(htmlspecialchars($_GET["page"]));
		}
		else {
			$page = 1;
		}
		$pages = round(count(Post::all())/5)+1;
		$posts = Post::orderBy('updated_at', 'desc')->offset(5 * ($page - 1))->take(5)->get();
		return view('main')->with(['title' => 'Главная', 'login' => User::getLoginForView(), 'posts' => $posts, 'pages' => $pages]);
	}

	//Получить пост из БД по его id и отобразить на странице статьи
	public function show($id) {
		$post = Post::where('id', $id)->first();
		return view('article')->with(['title' => $post->title, 'login' => User::getLoginForView(), 'post' => $post]);
	}

}
