<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $photo = $request->file('photo')->store('assets/products', 'public') ?? '';

        $product = Product::create($data);

        $gallery = [
            'products_id' => $product->id,
            'photo' => $photo,
        ];
        ProductGallery::create($gallery);

        return redirect()->route('dashboard.products');
    }

    public function show(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user', 'category'])->findOrFail($id);

        $categories = Category::all();

        return view('pages.dashboard.products.details', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function uploadGallery(Request $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photos')->store('assests/products', 'public');

        ProductGallery::create($data);

        return redirect()->route('dashboard.products.details', $request->products_id);
    }

    public function deleteGallery(Request $request, $id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard.products.details', $item->products_id);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $item = Product::findOrFail($id);

        $item->update($data);

        return redirect()->route('dashboard.products');
    }
}
