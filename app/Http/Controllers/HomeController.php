<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;

	class HomeController extends Controller
	{

		public function index()
		{
			$lowlimit = 'пусто';
			$upperlimit  = 'пусто';

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

			return view('index', [
				
				'data' => $arr, 'lowlimit' => $lowlimit, 'upperlimit' => $upperlimit
	
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
