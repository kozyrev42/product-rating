<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;

	use App\Models\Product;
	use App\Models\Review;

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
			$id_product = $request->id_product;
			$comment = $request->comment;
			$rating = $request->rating;

			$review = new Review;
			
			$review->id_product = $id_product;
			$review->id_user = $id_user;
			$review->review = $comment;
			$review->rating = $rating;

			$review->save();

			return redirect('/');
		}		
	}
