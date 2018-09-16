<?php

namespace Myblog\Http\Controllers;

use Illuminate\Http\Request;
use Myblog\User;

class CUser extends Controller
{
    //авторизация пользователя
    public function auth()
    {
    	$username = strip_tags(htmlspecialchars($_GET['username']));
    	$password = hash('sha256', strip_tags(htmlspecialchars($_GET['password'])));
    	$user = User::where('password', $password)->first();
    	if ($user != NULL) {
			if(!isset($_SESSION)){
    			session_start();
			}
    		$sessionHash = hash('sha256', rand());
    		$_SESSION['sessionhash'] = $sessionHash;
    		$user->sessionhash = $sessionHash;
    		$user->save();
    		header('Location: /');
    		exit;
    	}
    	header('Location: /user/login_error');
    	exit;
    }

    //выход пользователя
    public function logout()
    {
    	session_start();
    	session_destroy();
    	header('Location: /');
    	exit;
    }
}
