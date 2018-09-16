@extends('layouts.admin')

@section('main')
	<main>
		<section id="admin">
			<div class="container">
				<table>
					<tr>
						<th>id</th>
						<th>Имя</th>
						<th>e-mail</th>
						<th>Тема</th>
						<th>Сообщение</th>
						<th>Получено</th>
					</tr>
					@foreach ($messages as $message)
					<tr>
						<td>{{ $message->id }}</td>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->subject }}</td>
						<td>{{ $message->text }}</td>
						<td>{{ $message->updated_at}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</section>
	</main>
@endsection