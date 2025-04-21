<?php
// database/seeders/ProductSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Продукт 1',
            'coefficient' => 1.5,
        ]);

        Product::create([
            'name' => 'Продукт 2',
            'coefficient' => 2.0,
        ]);
    }
}
