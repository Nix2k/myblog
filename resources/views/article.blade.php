@extends('layouts.master')

@section('main')
	<main>
		<article class="article">
			<h4>{{ $post->title }}</h4>
			<div class="content">
				{!! strip_tags($post->text, '<p><i><b><u><span><strong><a><img>') !!}
			</div>
			<div class="links">
				<p> Опубликовано {{ $post->updated_at }} </p>
			</div>
		</article>
		<div class="comments">
			<div class="content">
				@foreach ($comments as $comment)
					<p><b>{{ $comment->name }}:</b></p>
					<p><i>{{ $comment->text }}</i></p>
				@endforeach
			</div>
		</div>
		<div id="form">
			<div class="content">
				<p>Оставить комментарий:</p>
				<input id="name" type="text" name="name" placeholder="Имя">
				<textarea id="text" name="text"></textarea>
				<button id="sendButton" name="comment">Отправить</button>
			</div>
		</div>
	</main>
	<script type="text/javascript">
		let sendButton = document.getElementById("sendButton");
		sendButton.addEventListener('click', (event) => {
			let xhr = new XMLHttpRequest();
			let text = document.getElementById("text").value;
			let name = document.getElementById("name").value;
			xhr.open('GET', `/comment/add?post_id={{ $post->id }}&text=${text}&name=${name}`, false);
			xhr.send();
			location.reload();
		});
	</script>
@endsection