<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'iPhone 20', 'price' => 1500.00, 'manufacturer_id' => 1, 'updated_at' => DB::raw('CURRENT_TIMESTAMP'),], 
            ['name' => 'Galaxy Note 21', 'price' => 1400.00, 'manufacturer_id' => 2, 'updated_at' => DB::raw('CURRENT_TIMESTAMP'),],  
            ]);
    }
}
