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
	</main>
@endsection