<?/* 
	Шаблон страницы с перечнем статей
	В него необходимо передать массив статей
*/?>

@extends('layouts.master')

@section('main')
	<main>
		<section id="blog">
			<div class="container">
				<h3>Блог</h3>
				@foreach ($posts as $post)
					<article>
						<h4>{{ $post->title }}</h4>
						<div class="content">
							{!! strip_tags(substr($post->text, 0, 300), '<p><i><b><u><span><strong>') !!}...
						</div>
						<div class="links">
							<a href="/post/{{ $post->id }}">Подробнее</a>
							<p> Опубликовано {{ $post->updated_at }} </p>
						</div>
					</article>
				@endforeach
				<div class="links">
					<p>Страницы:
						@for ($i = 1; $i < count($posts)/5+1; $i++)
							<a href="/?page={{ $i }}">{{ $i }}</a>
						@endfor
					</p>
				</div>
			</div>
		</section>
	</main>
@endsection