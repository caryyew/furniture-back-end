<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Diwanlar',
            'Konsullar',
            'Stol we Oturgyc',
            'Jurnal Stollar',
            'Caga mebelleri',
            'TV Podstawkalar',
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category;
            $obj->save();
            }
    }
}
