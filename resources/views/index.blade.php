<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Рейтинг товаров</title>
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>
	<h1>Рейтинг товаров</h1>
	<div>
		<a href="/registration">Регистрация</a>
	</div>
	<div>
		<a href="/login">Вход</a>
	</div>
	<div>
		<a href="">Выйти</a>
	</div>
	<br>
	<div>
		<a href="/createfakes">Создать фейк-товары</a>
	</div>

	<br>
	<hr><br>


	<div>
		<a href="">Рейтинг товаров по возрастанию</a>
	</div>
	<div>
		<a href="">Рейтинг товаров по убыванию</a>
	</div>
	<div>
		<a href="">Товары с моими отзывами</a>
	</div>

	<br><br>

	<form>
		<legend>Фильтрация по рейтингу</legend>
		<label>
			нижняя граница рейтинга
			<input type="text" name="name">
		</label>
		<br>

		<label>
			верхгяя граница рейтинга
			<input type="text" name="surname">
		</label>
		<br>
		<button>Показать</button>
	</form>

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
		<tbody>
			<!-- строка -->
			<tr>
				<td>круг</td>
				<td>3</td>
				<td class="reviews">

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм ggggggggggggggg gggggggggg</div>
					</div>

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм</div>
					</div>

				</td>
				<td>
					<a href="/login">выполните вход, чтобы оставить отзыв</a>
					<a href="/createreview">оставить отзыв</a>
				</td>
			</tr>

			<!-- строка -->
			<tr>
				<td>круг</td>
				<td>3</td>
				<td class="review">

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм</div>
					</div>

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм</div>
					</div>

				</td>
				<td>
					<a href="">выполните вход, чтобы оставить отзыв</a>
					<a href="">оставить отзыв</a>
				</td>
			</tr>

			<!-- строка -->
			<tr>
				<td>круг</td>
				<td>3</td>
				<td class="review">

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм</div>
					</div>

					<div class="review-container">
						<a href="">редактировать отзыв</a>
						<a href="">удалить отзыв</a>
						<div class="review-text">текст отзыва мммммммммммммм мммммммммммм</div>
					</div>

				</td>
				<td>
					<a href="">выполните вход, чтобы оставить отзыв</a>
					<a href="">оставить отзыв</a>
				</td>
			</tr>
		</tbody>
	</table>




</body>

</html>