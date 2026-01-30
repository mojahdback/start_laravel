<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Phone',
            'stock' => 1400,
            'description' => 'bla bla',
            'reference'=> 'djk',
            'image' => 'httpa:kef/dejkd',

        ]);
    }
}
