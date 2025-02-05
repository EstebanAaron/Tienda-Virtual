<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smartphones', 'description' => 'The best smartphones'],
            ['name' => 'Laptops', 'description' => 'The best laptops'],
            ['name' => 'Tablets', 'description' => 'The best tablets'],
            ['name' => 'Smartwatches', 'description' => 'The best smartwatches'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
