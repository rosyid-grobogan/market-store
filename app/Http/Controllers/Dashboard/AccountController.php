<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('pages.dashboard.account', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $item = User::FindOrFail(Auth::user()->id);

        $item->update($data);

        return redirect()->route('dashboard.account');
    }
}
