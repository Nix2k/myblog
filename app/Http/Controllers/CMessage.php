<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Message;
use Myblog\User;

class CMessage extends Controller
{
    //Получить все сообщения из БД и отобразить
	public static function showAll() {
		if (User::isLoggedIn()) {
			$messages = Message::orderBy('updated_at')->get();
			return view('admin_messages')->with(['title' => 'Сообщения', 'login' => User::getLoginForView(), 'messages' => $messages]);
		}
		else {
			header('Location: /');
			exit;
		}
	}

	//Добавить сообщение в БД и отправить e-mail
	public static function add() {
		$message = new Message;
		$message->subject = strip_tags(htmlspecialchars($_POST['subject']));
		$message->text = strip_tags(htmlspecialchars($_POST['message']));
		$message->name = strip_tags(htmlspecialchars($_POST['name']));
		$message->email = strip_tags(htmlspecialchars($_POST['email']));
		$message->save();
		header('Location: /');
		exit;
	}
}
