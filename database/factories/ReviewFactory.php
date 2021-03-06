<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review' => $this->faker->name(),
            'user_id' => function(){
                return User::all()->random();
            },
            'product_id' => function(){
                return Product::all()->random();
            },
            'star' => $this->faker->numberBetween(),

        ];
    }
}
