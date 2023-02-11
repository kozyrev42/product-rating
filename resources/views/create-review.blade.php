<!DOCTYPE html>
<html>

<head>
	<title>cтраница создания отзыва о товаре</title>
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>
	<h1>Страница создания отзыва о товаре: {{$product->name_product}}</h1>
	<h3>Ваш отзыв:</h3>

	<form action="/create_review" method="POST">
		@csrf
		
		<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
		<input type="hidden" name="id_product" value="{{$product->id}}">
		<textarea name="comment" cols="70" rows="10"></textarea>
		
		<br><br>

		<div> Ваша оценка:
			<input type="radio" name="rating" value="1">1
			<input type="radio" name="rating" value="2">2
			<input type="radio" name="rating" value="3">3
			<input type="radio" name="rating" value="4">4
			<input type="radio" name="rating" value="4">5
		</div>

		<br>
		<button type="submit">Отправить отзыв</button>
	</form>

</body>
</html>