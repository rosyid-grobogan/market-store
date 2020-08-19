<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $sumCustomer = User::count();
        $sumRevenue = Transaction::sum('total_price');
        $sumTransaction = Transaction::count();

        return view('pages.dashboard-admin', [
            'sumCustomer' => $sumCustomer,
            'sumRevenue' => $sumRevenue,
            'sumTransaction' => $sumTransaction,
        ]);
    }
}
