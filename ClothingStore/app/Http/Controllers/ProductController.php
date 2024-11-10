<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        $categories = Category::all(); 
        return view('products.index', compact('products', 'categories')); 
    }

    public function byCategory($categoryId)
    {
        $category = Category::with('products')->findOrFail($categoryId);
        return view('products.byCategory', compact('category'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); 

    
        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'))->with('query', $query);
    }
}
