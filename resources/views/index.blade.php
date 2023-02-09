<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Рейтинг товаров</title>
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>
	<h1>Рейтинг товаров</h1>

	@if (Auth::check())
		<p>Пользователь: {{ Auth::user()->name }}</p>
	@else 
		<p>Пользователь: не авторизован</p>
	@endif

	@if (!Auth::check())
			<div>
				<a href="/register">Регистрация</a>
			</div>
			<div>
				<a href="/login">Вход</a>
			</div>
	@endif

	@if (Auth::check())
		<div>
			<a href="{{ route('logout') }}" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">Выйти</a>
		</div>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>
	@endif

	<br>
	<div>
		<a href="/createfakes">Создать фейк-товары</a>
	</div>

	<br>
	<hr><br>


	<div>
		<a href="/#">Рейтинг товаров по возрастанию</a>
	</div>
	<div>
		<a href="">Рейтинг товаров по убыванию</a>
	</div>
	<div>
		<a href="">Товары с моими отзывами</a>
	</div>

	<br><br>

	<form action="/" method="POST">
		@csrf
		<legend>Фильтрация по рейтингу</legend>
		<label>
			нижняя граница рейтинга
			<input type="text" name="lowlimit">
		</label>
		<br>

		<label>
			верхгяя граница рейтинга
			<input type="text" name="upperlimit">
		</label>
		<br>
		<button type="submit">Фильтровать</button>
	</form>

	<p>нижняя граница: {{ $lowlimit }}</p>
	<p>верхгяя граница: {{ $upperlimit }}</p>

	<br><br>

	<table class="table">
		<thead>
			<tr>
				<th>Наименование</th>
				<th>Рейтинг</th>
				<th class="reviews">Отзывы</th>
				<th>Оставить отзыв</th>

			</tr>
		</thead>

		{{-- @php
			dd($data);
		@endphp --}}

		{{-- @if ($data) --}}
			<tbody>
				@foreach ($data as $elem)
					<tr>
						<td>{{ $elem['name'] }}</td>
						<td>{{ $elem['rating'] }}</td>
						<td class="reviews">

							{{-- если отзыв содержит массив, для каждого отзыва выводим контейнер --}}
							@if (is_array($elem['revies']))
								
									@foreach ($elem['revies'] as $el)
										<div class="review-container">
											<a href="">редактировать отзыв</a>
											<a href="">удалить отзыв</a>
											<div class="review-text">{{ $el }}</div>
										</div>
									@endforeach
								
							{{-- иначе просто выводится отзыв --}}
							@else
								<div class="review-container">
									<a href="">редактировать отзыв</a>
									<a href="">удалить отзыв</a>
									<div class="review-text">{{ $elem['revies'] }}</div>
								</div>
							@endif

						</td>
						<td>
							<a href="/login">выполните вход, чтобы оставить отзыв</a>
							<a href="/createreview">оставить отзыв</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		{{-- @endif	 --}}
	</table>


</body>

</html>