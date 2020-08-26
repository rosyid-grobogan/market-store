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

    public function show(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
                                        ->findOrFail($id);

        return view('pages.dashboard.transactions.details', [
            'transaction' => $transaction,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = TransactionDetail::findOrFail($id);

        $item->update($data);

        return redirect()->route('dashboard.transactions.show', $id);
    }
}
