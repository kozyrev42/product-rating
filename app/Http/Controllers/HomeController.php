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

			return view('index', [
				'products' => $products
			]);
		}

	}
