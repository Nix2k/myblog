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
        <section id="contact">
            <div class="container">
                <h3>Написать автору</h3>
                <form enctype="multipart/form-data" method="post">
                    <div class="col-l">
                        <input type="text" name="name" placeholder="Имя *" required>
                        <input type="email" name="email" placeholder="e-mail *" required>
                        <input type="text" name="subject" placeholder="Тема">
                    </div>
                    <div class="col-r">
                        <textarea name="message" placeholder="Сообщение *" required></textarea>
                        <div>
                            <label>
                                <input type="file" name="file">
                                <span>Приложить файл</span>
                            </label>
                        </div>
                    </div>
                    <input type="submit" name="send" value="Отправить сообщение"></submit>
                </form>
            </div>
        </section>
    </main>
@endsection