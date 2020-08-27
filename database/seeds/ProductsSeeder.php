<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        for ($i = 1; $i <= 10; $i++) { 
            Product::create([
                'title' => 'Title '. $i,
                'description' => 'Description '. $i,
                'active' => 1
            ]);
        }      
    }
}
