<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'type' => fake()->randomElement([
                'Excursion',
                'Custom Package',
                'Cruise',
                'Transfer',
            ]),
            'description' => fake()->text(),
            'capacity' => fake()->numberBetween(0, 50),
        ];
    }
}
