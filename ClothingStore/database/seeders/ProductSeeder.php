<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $menCategory = Category::where('name', 'Men’s Clothing')->first();
        $womenCategory = Category::where('name', 'Women’s Clothing')->first();
        $accessoriesCategory = Category::where('name', 'Accessories')->first();

        
        Product::create([
            'name' => 'Classic T-Shirt',
            'description' => 'A comfortable, classic t-shirt for everyday wear.',
            'price' => 19.99,
            'category_id' => $menCategory->id,
        ]);

        Product::create([
            'name' => 'Denim Jacket',
            'description' => 'Stylish denim jacket with a relaxed fit.',
            'price' => 49.99,
            'category_id' => $menCategory->id,
        ]);

        Product::create([
            'name' => 'Casual Shorts',
            'description' => 'Comfortable and casual shorts for warm weather.',
            'price' => 24.99,
            'category_id' => $menCategory->id,
        ]);

        
        Product::create([
            'name' => 'Summer Dress',
            'description' => 'Lightweight and breezy dress perfect for summer.',
            'price' => 29.99,
            'category_id' => $womenCategory->id,
        ]);

        Product::create([
            'name' => 'Blouse',
            'description' => 'Elegant blouse suitable for office or casual wear.',
            'price' => 34.99,
            'category_id' => $womenCategory->id,
        ]);

        Product::create([
            'name' => 'Skinny Jeans',
            'description' => 'Classic skinny jeans with a modern fit.',
            'price' => 39.99,
            'category_id' => $womenCategory->id,
        ]);

        
        Product::create([
            'name' => 'Leather Belt',
            'description' => 'Durable leather belt with a classic buckle.',
            'price' => 14.99,
            'category_id' => $accessoriesCategory->id,
        ]);

        Product::create([
            'name' => 'Sunglasses',
            'description' => 'Stylish sunglasses with UV protection.',
            'price' => 19.99,
            'category_id' => $accessoriesCategory->id,
        ]);

        Product::create([
            'name' => 'Watch',
            'description' => 'Classic wristwatch with a leather strap.',
            'price' => 59.99,
            'category_id' => $accessoriesCategory->id,
        ]);
    }
}
