<?php
// database/seeders/SaleSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    public function run()
    {
        Sale::create([
            'partner_id' => 1,
            'product_id' => 1,
            'quantity' => 100,
            'sale_date' => '2023-01-15',
        ]);

        Sale::create([
            'partner_id' => 2,
            'product_id' => 2,
            'quantity' => 200,
            'sale_date' => '2023-02-20',
        ]);
    }
}
