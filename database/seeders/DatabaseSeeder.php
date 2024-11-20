<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Create a single product
    \App\Models\Product::factory()->create();

    // Create 10 products
    \App\Models\Product::factory()->count(10)->create();
    }

}
