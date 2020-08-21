<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(1);

        return view('pages.categories', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
