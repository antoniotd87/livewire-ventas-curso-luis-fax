<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 1000,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 500,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 200,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 100,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 50,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 20,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 10,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 5,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 2,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 1,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 0.5,
            'image' => ''
        ]);
        Denomination::create([
            'type' => 'OTRO',
            'value' => 0,
            'image' => ''
        ]);
    }
}
