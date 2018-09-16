@extends('layouts.admin')

@section('main')
    <main>
        <section id="admin">
            <div class="container">
                <table>
                    <tr>
                        <th>id</th>
                        <th>Заголовок</th>
                        <th>Опубликовано</th>
                        <th colspan="2">Действия</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->updated_at}}</td>
                        <td><a href="/admin/post/edit/{{ $post->id }}">Редактировать</a></td>
                        <td><a href="/admin/post/delete/{{ $post->id }}">Удалить</a></td>
                    </tr>
                    @endforeach
                </table>
                <a href="/admin/post/new">Создать публикацию</a></td>
            </div>
        </section>
    </main>
@endsection