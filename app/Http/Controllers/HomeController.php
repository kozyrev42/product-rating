<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Product;

	class HomeController extends Controller
	{

		// страница по умолчанию
		public function index()
		{
			$products = Product::all();

			$lowlimit = 'пусто';
			$upperlimit  = 'пусто';

			return view('index', [
				'products' => $products, 'lowlimit' => $lowlimit, 'upperlimit' => $upperlimit
			]);
		}

		// обработчик формы фильтрации
		public function formHandler(Request $request)
		{
			$arr = [
				[
					'name' => 'круг',
					'rating' => '3',
					'revies' => 'отзыв про круг',
				],
				[
					'name' => 'квадрат',
					'rating' => '5',
					'revies' => ['1 отзыв про квадрат', '2 отзыв про квадрат', '3 отзыв про квадрат'],
				],
			];

			$lowlimit = $request->input('lowlimit');
			$upperlimit  = $request->input('upperlimit');

			return view('index', [
				'lowlimit' => $lowlimit, 'upperlimit' => $upperlimit, 'data' => $arr
			]);
		}
	}
