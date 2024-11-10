<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Men’s Clothing']);
        Category::create(['name' => 'Women’s Clothing']);
        Category::create(['name' => 'Accessories']);
    }
}
