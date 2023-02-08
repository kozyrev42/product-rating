<!DOCTYPE html>
<html>

<head>
	<title>cтраница создания отзыва о товаре</title>
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>
	<h1>Страница создания отзыва о товаре</h1>
	<h3>Ваш отзыв:</h3>
	<form>
		<label>
			<!-- <input class="input-review" type="text"> -->
			<textarea cols="70" rows="10"></textarea>
		</label>
		<br><br>

		<div> Ваша оценка:
			<label>
				<input type="radio" name="radio-fm" value="1">1
			</label>

			<label>
				<input type="radio" name="radio-fm" value="2">2
			</label>

			<label>
				<input type="radio" name="radio-fm" value="3">3
			</label>

			<label>
				<input type="radio" name="radio-fm" value="4">4
			</label>

			<label>
				<input type="radio" name="radio-fm" value="4">5
			</label>
		</div>

		<br>
		<button>Отправить отзыв</button>
	</form>
</body>

</html>