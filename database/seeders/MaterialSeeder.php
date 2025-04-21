<?php
// database/seeders/MaterialSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        Material::create([
            'name' => 'Материал 1',
            'defect_percentage' => 5.0,
        ]);

        Material::create([
            'name' => 'Материал 2',
            'defect_percentage' => 3.5,
        ]);
    }
}
