@extends('layouts.master')

@section('main')
    <main>
        <section id="form">
            <div class="container">
                <h3>Написать автору</h3>
                <form enctype="multipart/form-data" method="post" action="/admin/messages/add">
                    <div class="col-l">
                        <input type="text" name="name" placeholder="Имя *" required>
                        <input type="email" name="email" placeholder="e-mail *" required>
                        <input type="text" name="subject" placeholder="Тема">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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