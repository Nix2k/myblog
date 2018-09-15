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
                            {!! $post-> text !!}
                        </div>
                        <div class="links">
                            <a href="/post/{{ $post->id }}">Подробнее</a>
                            <p> Опубликовано {{ $post->updated_at }} </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </main>
@endsection