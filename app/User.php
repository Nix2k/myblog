<?php

namespace Myblog;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	//возвращает из БД пользователя по переменной sessionhash в сессии или null
	public static function isLoggedIn() {
		if(!isset($_SESSION)){
			session_start();
		}
		if (isset($_SESSION['sessionhash'])) {
			$hash = strip_tags(htmlspecialchars($_SESSION['sessionhash']));
			$user = User::where('sessionhash', $hash)->first();
			if ($user != NULL) {
				return $user;
			}
			else {
				session_destroy();
				return false;
			}
		}
		else {
			return false;
		}
	}

	//Возвращает значение для передачи в шаблон в зависимости от того залогинен пользователь или нет
	public static function getLoginForView()
	{
		if (User::isLoggedIn()) {
			return 'logout';
		}
		else {
			return 'login';
		}
	}

}
