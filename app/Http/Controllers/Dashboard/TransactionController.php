<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $sellTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                                            ->whereHas('product', function($product) {
                                                $product->where('users_id', Auth::user()->id);
                                            })
                                            ->get();
        $buyTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                                            ->whereHas('transaction', function($transaction) {
                                                $transaction->where('users_id', Auth::user()->id);
                                            })
                                            ->get();
        return view('pages.dashboard.transactions.index', [
            'sellTransactions' => $sellTransactions,
            'buyTransactions' => $buyTransactions,
        ]);
    }

    public function show()
    {
        return view('pages.dashboard.transactions.show');
    }
}
