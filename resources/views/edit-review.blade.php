<!DOCTYPE html>
<html>
	<head>
		<title>Страница редактирования отзыва</title>
	</head>
	<body>
		
		<h1>Страница редактирования отзыва о товаре: {{$name_product}} </h1>
		<h3>Ваш отзыв:</h3>

		<form action="/editreviewexec" method="POST">
			@csrf
			
			<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
			<input type="hidden" name="product_id" value="{{$product_id}}">
			<input type="hidden" name="review_id" value="{{$review_id}}">

			<textarea name="text_review" cols="70" rows="10">{{$text_review}}</textarea>
			
			<br><br>

			<div> Ваша оценка:
				<input type="radio" name="rating" value="1" {{$rating === '1' ? 'checked' : ''}}>1
				<input type="radio" name="rating" value="2" {{$rating === '2' ? 'checked' : ''}}>2
				<input type="radio" name="rating" value="3" {{$rating === '3' ? 'checked' : ''}}>3
				<input type="radio" name="rating" value="4" {{$rating === '4' ? 'checked' : ''}}>4
				<input type="radio" name="rating" value="5" {{$rating === '5' ? 'checked' : ''}}>5
			</div>

			<br>
			<button type="submit">Редактировать отзыв</button>
		</form>
		<br>

		<form action="/deletereview" method="POST">
			@csrf
			<input type="hidden" name="review_id" value="{{$review_id}}">
			<button type="submit">Удалить отзыв</button>
		</form>

	</body>
</html>