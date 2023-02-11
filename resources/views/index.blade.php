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
		<form id="logout-form" action="{{ route('logout') }}" method="POST">
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
		{{-- если id авторизованного === id создателя отзыва на товар => выводими товар --}}
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
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->name_product}}</td>
						<td>0</td>
						<td class="reviews">

							<div class="review-container">
								
								{{-- если id авторизованного === id создателя --}}
								<a href="">редактировать отзыв</a>
								<a href="">удалить отзыв</a>

								<div class="review-text">текст отзыва</div>
							</div>

							<div class="review-container">
								<a href="">редактировать отзыв</a>
								<a href="">удалить отзыв</a>
								<div class="review-text">текст отзыва</div>
							</div>
							{{-- если отзыв содержит массив, для каждого отзыва выводим контейнер --}}
							{{-- @if (is_array($elem['revies']))
								
									@foreach ($elem['revies'] as $el)
										<div class="review-container">
											<a href="">редактировать отзыв</a>
											<a href="">удалить отзыв</a>
											<div class="review-text">{{ $el }}</div>
										</div>
									@endforeach
								
							{{-- иначе просто выводится отзыв --}}
						</td>
						<td>
							{{-- <a href="/login">выполните вход, чтобы оставить отзыв</a>
							<a href="/createreview">оставить отзыв</a> --}}
							@if (Auth::check())
								<a href="/createreviewshow/{{$product->id}}">оставить отзыв</a>
							@else
								<a href="/login">выполните вход, чтобы оставить отзыв</a>
							@endif
						</td>
					</tr>
				@endforeach
			</tbody>
		{{-- @endif	 --}}
	</table>


</body>

</html>