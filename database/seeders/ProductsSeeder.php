<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        Products::create([
            'name' => 'Howo V7-X Dump Truck',
            'image_url' => 'truck1.png',
        ]);

        Products::create([
            'name' => 'Howo V7 Dump Truck',
            'image_url' => 'truck2.png',
        ]);

        Products::create([
            'name' => 'Howo TX Dump Truck',
            'image_url' => 'truck3.png',
        ]);

        Products::create([
            'name' => 'Howo A7 | T7 Prime Mover',
            'image_url' => 'truck4.png',
        ]);

        Products::create([
            'name' => 'Howo 7 Prime Truck',
            'image_url' => 'truck5.png',
        ]);

        Products::create([
            'name' => 'Howo A7 | T7 Dump Truck',
            'image_url' => 'truck6.png',
        ]);
    }
}
