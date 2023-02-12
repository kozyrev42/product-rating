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

						{{-- средний рейтинг --}}
						<td>{{ 
							$product->averageRating()
						}}</td>

						<td class="reviews">

							@if ($product->reviews)
								@foreach ($product->reviews as $review)

									<div class="review-container">

										@if (Auth::user()->id === $review->id_user)
											<form id="editreview" action="/editreview" method="POST">
												@csrf
												<input type="hidden" name="product_id" value="{{ $review->product_id }}">
												<input type="hidden" name="review_id" value="{{ $review->id }}">
												<input type="hidden" name="text_review" value="{{ $review->review }}">
												<input type="hidden" name="rating" value="{{ $review->rating }}">
												<button type="submit">редактировать / удалить</button>
											</form>
										@endif

										<div class="review-text"><b>{{$review->review}}</b></div>
										<div class="review-text">оценка: {{$review->rating}}</div>
									</div>								
									
								@endforeach 		
							@else
								отзывов нет
							@endif
							
						</td>
						<td>
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