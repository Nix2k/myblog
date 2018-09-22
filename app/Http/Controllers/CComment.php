<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Comment;

class CComment extends Controller
{
    //Добавить комментарий в БД
	public static function add() {
		$comment = new Comment; //Создание записи в БД
		$comment->name = strip_tags(htmlspecialchars($_GET['name']));
		$comment->text = strip_tags(htmlspecialchars($_GET['text']));
		$comment->post_id = strip_tags(htmlspecialchars($_GET['post_id']));
		$comment->save();
	}
}
