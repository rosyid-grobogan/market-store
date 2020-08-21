<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
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
