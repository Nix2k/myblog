{-- 
    Шаблон страницы со статьёй
    В него необходимо передать переменные:
    article.title - Заголовок статьи
    article.text - HTML контент статьи
    article.date - дата и время публикации
--}

@extends('layouts.master')

@section('main')
    <main>
        <section class="article">
            <h2>{{ article.title }}</h2>
            {!! article.text !!}
            <p class="date">{{ article.date }}</p>
        </section>
    </main>
@endsection