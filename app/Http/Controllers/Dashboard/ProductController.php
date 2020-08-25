<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        return view('pages.dashboard.products.create');
    }

    public function show($slug)
    {
        return view('pages.dashboard.products.details');
    }
}
