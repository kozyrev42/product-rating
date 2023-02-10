<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // подключаем модель на фабрике
    protected $model = Product::class;


    public function definition()
    {
        return [           
            'name_product' => $this->faker->lastName,
            
        ];
    }
}
