<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is13Digit = $this->faker->boolean(50); // 50% chance for each
        return [
            'product_name' => $this->faker->word(), // Random product name
            'description' => $this->faker->sentence(), // Random description
            'category' => $this->faker->word(), // Random category
            'barcode' => $is13Digit 
            ? $this->faker->unique()->numerify('#############') // 13 digits
            : $this->faker->unique()->numerify('########'),     // 8 digits
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}