<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TransactionDetail;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $transactions = TransactionDetail::with(['transaction.user','product.galleries'])
                                        ->whereHas('product', function($product) {
                                            $product->where('users_id', Auth::user()->id);
                                        });

        $revenue = $transactions->get()->reduce(function ($carry, $item) {
            return $carry + $item->price;
        });
        $customer = User::count();

        return view('pages.dashboard.index', [
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->get(),
            'revevue' => $revenue,
            'customer' => $customer
        ]);
    }

    public function products()
    {
        return view('pages.dashboard.products');
    }

    public function detail($slug)
    {
        return view('pages.dashboard.products-details');
    }

    public function settings()
    {
        return view('pages.dashboard.settings');
    }

     public function transactions()
    {
        return view('pages.dashboard.transactions');
    }
    public function transactionDetail($id)
    {
        return view('pages.dashboard.transactions-detail');
    }

    public function account()
    {
        return view('pages.dashboard.account');
    }



}
