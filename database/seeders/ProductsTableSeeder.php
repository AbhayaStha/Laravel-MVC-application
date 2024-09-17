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
            'name' => 'iPhone 20',
            'price' => 6009,
            'updated_at' => DB::raw(' CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Note 21',
            'price' => 5674,
            'updated_at' => DB::raw(' CURRENT_TIMESTAMP'),
        ]);
    }
}
