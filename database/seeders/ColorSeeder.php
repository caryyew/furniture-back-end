<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'Ak',
            'Gara',
            'Gyzyl',
            'Yasyl',
            'Gok',
            'Gonur',
        ];

        foreach ($colors as $color) {
            $obj = new Color();
            $obj->name = $color;
            $obj->save();
        }
    }
}
