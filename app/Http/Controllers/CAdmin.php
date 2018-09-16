<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Post;
use Myblog\User;

class CAdmin extends Controller
{
	//Выводит список статей для управления
	public function showPosts()
	{
		if (User::isLoggedIn()) {
			$posts = Post::orderBy('id')->get();
			return view('admin_posts')->with(['title' => 'Публикации', 'login' => User::getLoginForView(), 'posts' => $posts]);
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Отображает страницу редактирования записи
	public function editPost($id)
	{
		if (User::isLoggedIn()) {
			$post = Post::where('id', $id)->first();
			return view('admin_post_edit')->with(['title' => 'Редактирование публикации', 'login' => User::getLoginForView(), 'post' => $post]);
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Применяет результаты редактирования записи
	public function applyPost()
	{
		if (User::isLoggedIn()) {
			$id = strip_tags(htmlspecialchars($_POST['id']));
			$post = Post::where('id', $id)->first();
			$post->title = strip_tags(htmlspecialchars($_POST['title']));
			$post->text = strip_tags($_POST['text'], '<p><i><b><u><span><strong><a><img>');
			$post->save();
			header('Location: /admin');
			exit;
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Удаляет запись
	public function deletePost($id)
	{
		if (User::isLoggedIn()) {
			Post::destroy($id);
			header('Location: /admin');
			exit;
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Отображает страницу создания новой записи
	public function newPost()
	{
		if (User::isLoggedIn()) {
			return view('admin_post_new')->with(['title' => 'Создание публикации', 'login' => User::getLoginForView()]);
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Сохраняет новую запись
	public function addPost()
	{
		$user = User::isLoggedIn();
		if ($user) {
			$post = new Post;
			$post->title = strip_tags(htmlspecialchars($_POST['title']));
			$post->text = strip_tags($_POST['text'], '<p><i><b><u><span><strong><a><img>');
			$post->user_id = $user->id;
			$post->save();
			header('Location: /admin');
			exit;
		}
		else {
			header('Location: /');
			exit;
		}
	}
}
