@extends('layouts.admin')

@section('main')
	<main>
		<section id="form">
			<div class="container">
				<form action="/admin/post/apply" method="POST">
					<input type="text" name="title" value="{{ $post->title }}">
					<input type="hidden" name="id" value="{{ $post->id }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<textarea name="text">{{ $post->text }}</textarea>
					<p style="color: #ffffff;">Допустимы теги &lt;p&gt;&lt;i&gt;&lt;b&gt;&lt;u&gt;&lt;span&gt;&lt;strong&gt;&lt;a&gt;&lt;img&gt;</p>
					<input type="submit" name="save" value="Сохранить">
				</form>
			</div>
		</section>
	</main>
@endsection