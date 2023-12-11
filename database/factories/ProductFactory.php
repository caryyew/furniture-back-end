<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $color = DB::table('colors')->inRandomOrder()->first();
        $guarantee = DB::table('guarantees')->inRandomOrder()->first();
        return [
            'brand_id' => $brand->id,
            'category_id' => $category->id,
            'color_id' => $color->id,
            'guarantee_id' => $guarantee->id,
            'name' => fake()->name(),
            'description' =>fake()->paragraph(9),
            'price' => rand(200, 1000),
        ];
    }
}
