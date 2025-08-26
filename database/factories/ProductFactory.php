<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QueryBuilder\ProductModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //
    protected $model = ProductModel::class;
    //
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10),
            'description' => fake()->paragraph(1),
            'price' => rand(500, 1000),
        ];
    }
}
