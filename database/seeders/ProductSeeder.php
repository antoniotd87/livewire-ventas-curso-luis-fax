<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laravel y Livewire',
            'barcode' => 43789,
            'cost' => 200,
            'price' => 150,
            'stock' => 1000,
            'alerts' => 10,
            'image' => 'curso.png',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'POCO F4',
            'barcode' => 65,
            'cost' => 342,
            'price' => 24,
            'stock' => 10030,
            'alerts' => 130,
            'image' => 'curso.png',
            'category_id' => 3
        ]);
    }
}
