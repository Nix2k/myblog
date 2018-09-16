@extends('layouts.admin')

@section('main')
	<main>
		<section id="form">
			<div class="container">
				<form action="/admin/post/add" method="POST">
					<input type="text" name="title" placeholder="Заголовок">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<textarea name="text">&lt;p&gt;Текст статьи&lt;/p&gt;</textarea>
					<p style="color: #ffffff;">Допустимы теги &lt;p&gt;&lt;i&gt;&lt;b&gt;&lt;u&gt;&lt;span&gt;&lt;strong&gt;&lt;a&gt;&lt;img&gt;</p>
					<input type="submit" name="save" value="Сохранить">
				</form>
			</div>
		</section>
	</main>
@endsection