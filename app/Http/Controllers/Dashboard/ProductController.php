<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries', 'category'])
                            ->where('users_id', Auth::user()->id)
                            ->get();

        return view('pages.dashboard.products.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.dashboard.products.create', [
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        return view('pages.dashboard.products.details');
    }
}
