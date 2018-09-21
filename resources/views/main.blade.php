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
						@for ($i = 1; $i <= $pages; $i++)
							@if ($page == $i)
								<?php $style = 'style="font-weight: bold;"'; ?>
							@else
								<?php $style = ''; ?>
							@endif
							<a {!! $style !!} href="/?page={{ $i }}">{{ $i }}</a>
						@endfor
					</p>
					<p> Сначала: <a href="/?page={{ $page }}&order=desc">новые</a> / <a href="/?page={{ $page }}&order=asc">старые</a></p>
				</div>
			</div>
		</section>
	</main>
@endsection