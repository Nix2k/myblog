<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\Message;
use Myblog\User;
use Mail;

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
		$message->name = strip_tags(htmlspecialchars($_POST['name']));
		$message->text = strip_tags(htmlspecialchars($_POST['message']));
		$message->email = strip_tags(htmlspecialchars($_POST['email']));
		$msgParams = [
			'name' => $message->name,
			'subject' => $message->subject,
			'email' => $message->email,
			'text' => $message->text
		];
		Mail::send('emails.message', $msgParams, function($msg)
		{
		    $msg->to('mihail.bokov@gmail.com')->subject('Новое сообщение в блоге');
		});
		$message->save();
		header('Location: /');
		exit;
	}
}
