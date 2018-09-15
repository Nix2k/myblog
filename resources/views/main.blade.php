<?/* 
    Шаблон страницы с перечнем статей
    В него необходимо передать массив статей articles
    Каждый элемент массива имеет свойства:
    .title - название
    .shorttext - краткое содержание
    .img - ссылка на миниатюру
    .date - дата и время публикации
*/?>

@extends('layouts.master')

@section('main')
    <main>
        <section id="blog">
            <div class="container">
                 <h3>Блог</h3>
            </div>
        </section>
    </main>
@endsection