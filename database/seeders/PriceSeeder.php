<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'Gratis',
            'Value' => 0
        ]);

        Price::create([
            'name' => '19.99 US$ (Nivel 1)',
            'Value' => 19.99
        ]);

        Price::create([
            'name' => '49.99 US$ (Nivel 2)',
            'Value' => 49.99
        ]);


        Price::create([
            'name' => '99.99 US$ (Nivel 3)',
            'Value' => 99.99
        ]);
    }
}
