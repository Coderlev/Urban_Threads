<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Classic T-Shirt',
            'description' => 'A comfortable, classic t-shirt for everyday wear.',
            'price' => 19.99,
            'image' => 'images/tshirt.jpg',
        ]);

        Product::create([
            'name' => 'Denim Jacket',
            'description' => 'Stylish denim jacket with a relaxed fit.',
            'price' => 49.99,
            'image' => 'images/denim_jacket.jpg',
        ]);

        Product::create([
            'name' => 'Summer Dress',
            'description' => 'Lightweight and breezy dress perfect for summer.',
            'price' => 29.99,
            'image' => 'images/summer_dress.jpg',
        ]);
    }
}
