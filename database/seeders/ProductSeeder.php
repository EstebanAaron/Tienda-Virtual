<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'iPhone 13', 'description' => 'Latest Apple smartphone', 'price' => 999, 'category_id' => '1', 'stock' => 10],
            ['name' => 'Samsung Galaxy S21', 'description' => 'Latest Samsung smartphone', 'price' => 899, 'category_id' => '1', 'stock' => 10],
            ['name' => 'MacBook Pro', 'description' => 'Latest Apple laptop', 'price' => 1999, 'category_id' => '2', 'stock' => 2],
            ['name' => 'Dell XPS 13', 'description' => 'Latest Dell laptop', 'price' => 1499, 'category_id' => '2',  'stock' => 1],
            ['name' => 'Sony WH-1000XM4', 'description' => 'Noise-cancelling headphones', 'price' => 349, 'category_id' => '3',  'stock' => 10],
            ['name' => 'Bose QuietComfort 35 II', 'description' => 'Noise-cancelling headphones', 'price' => 299, 'category_id' => '4',  'stock' => 7],
            ['name' => 'Dyson V11', 'description' => 'Cordless vacuum cleaner', 'price' => 599, 'category_id' => '4',  'stock' => 10],
            ['name' => 'Instant Pot Duo', 'description' => 'Multi-use pressure cooker', 'price' => 99, 'category_id' => '4', 'stock' => 10],
            ['name' => 'Canon EOS R5', 'description' => 'Full-frame mirrorless camera', 'price' => 3899, 'category_id' => '5', 'stock' => 10],
            ['name' => 'Nikon Z6 II', 'description' => 'Full-frame mirrorless camera', 'price' => 1999, 'category_id' => '5', 'stock' => 10],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
