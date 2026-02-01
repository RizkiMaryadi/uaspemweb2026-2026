<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // ⬅ WAJIB IMPORT MODEL

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Gaming',
            'description' => 'RTX Series',
            'price' => 15000000,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'Mouse Wireless',
            'description' => 'RGB',
            'price' => 250000,
            'stock' => 50
        ]);
    }
}
