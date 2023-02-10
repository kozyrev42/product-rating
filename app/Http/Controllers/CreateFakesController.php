<?php
	namespace App\Http\Controllers;

	use App\Models\Product;

	class CreateFakesController extends Controller
	{
		public function show()
		{
			return view('create-fakes');
		}

		public function factory()
		{
			// запуск фабрики
			Product::factory()->count(3)->create();

			return redirect('/');
		}

	}
