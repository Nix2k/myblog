@extends('layouts.master')

@section('main')
	<main>
		<section id="admin">
			<div id="form">
				<div class="container" style="width: 300px; padding: 20px;">
					<form action="auth" method="GET">
						<input type="text" name="username" placeholder="Имя пользователя">
						<input type="password" name="password" placeholder="Пароль">
						<input type="submit" name="Login" value="Войти">
					</form>
				</div>
			</div>
		</section>
	</main>
@endsection