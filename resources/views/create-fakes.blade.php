<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="/css/styles.css">
		<title>Страница по созданию фейков</title>
	</head>

	<body>
		<h1>Страница по созданию фейков</h1>

		<h3>При клике, создаться 3 рандомных товара</h3>
		<div class='but-fakes'>
			<a href="/factory">Создать товары</a>
		</div>
	</body>
</html>