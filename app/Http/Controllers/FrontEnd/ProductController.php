<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(12);

        return view('pages.categories', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function detail($slug)
    {
        return view('pages.detail');
    }
}
