<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Models\Product;
	use App\Models\Review;
	
	class EditReviewController extends Controller
	{
		public function show(Request $request)
		{
			$product = Product::find($request->product_id);
			
			$name_product = $product->name_product;
			$product_id = $request->product_id;
			$review_id = $request->review_id;
			$text_review = $request->text_review;
			$rating = $request->rating;

			return view('edit-review', [
				'name_product' => $name_product,
				'product_id' => $product_id,
				'review_id' => $review_id,
				'text_review' => $text_review,
				'rating' => $rating,
			]);
		}

		
		public function exec(Request $request)
		{
			$id_user = $request->id_user;
			$product_id = $request->product_id;
			$text_review = $request->text_review;
			$rating = $request->rating;
			$review_id = $request->review_id;
			
			// получаем объект Отзыва по id
			$review = Review::find($review_id);
			
			$review->id_user = $id_user;
			$review->product_id = $product_id;
			$review->review = $text_review;
			$review->rating = $rating;
			$review->save();

			return redirect('/');
		}

		public function delete(Request $request)
		{
			$review_id = $request->review_id;
			Review::destroy($review_id );

			return redirect('/');
		}
	}
