<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => function(){
                return Category::all()->random();
            },
            'detail' => $this->faker->paragraph(),
            'status' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(100,1000),
        ];
    }
}
