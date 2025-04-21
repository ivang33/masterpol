<?php

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        Partner::create([
            'name' => 'Партнер 1',
            'type' => 'Оптовик',
            'rating' => 5,
            'address' => 'г. Москва, ул. Ленина, д. 10',
            'director_name' => 'Иванов Иван Иванович',
            'phone' => '+79991234567',
            'email' => 'partner1@example.com',
        ]);

        Partner::create([
            'name' => 'Партнер 2',
            'type' => 'Розница',
            'rating' => 4,
            'address' => 'г. Санкт-Петербург, ул. Пушкина, д. 5',
            'director_name' => 'Петров Петр Петрович',
            'phone' => '+79997654321',
            'email' => 'partner2@example.com',
        ]);
    }
}
