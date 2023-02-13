<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;

	use App\Models\Product;
	use App\Models\Review;

	use App\Jobs\ProcessRecordingReview;


	class CreateReviewController extends Controller
	{
		public function show(Request $request)
		{

			// получаем id товара
			$id_product = $request->id;
			
			// передаём объект в страницу
			$product = Product::find($id_product);

			return view('create-review', ['product' => $product]);

		}

		public function createReview(Request $request)
		{
			$id_user = $request->id_user;
			$product_id = $request->id_product;
			$text_review = $request->text_review;
			$rating = $request->rating;

			$review = new Review;
			
			$review->product_id = $product_id;
			$review->id_user = $id_user;
			$review->review = $text_review;
			$review->rating = $rating;

			$result = $review->save();

			//  при успешной записи данных в базу, записываем в Лог
			//  php artisan queue:work  // запуск очереди
			//  php artisan queue:work --stop-when-empty
			//  остановка очереди: Ctrl+C
			if ($result) {
				$data = 'Данные отзыва: id товара: ' . $product_id . '| id юзера: '. $id_user . '| текст: ' . $text_review . '| оценка: ' . $rating;
				ProcessRecordingReview::dispatch($data);
			}
			
			return redirect('/');
		}		
	}
