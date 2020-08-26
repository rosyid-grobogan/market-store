<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{

    public function edit()
    {
        $user = Auth::user();
        $categories = Category::all();

        return view('pages.dashboard.settings', [
            'user' => $user,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $item = User::FindOrFail(Auth::user()->id);

        $item->update($data);

        return redirect()->route('dashboard.settings');
    }

}
