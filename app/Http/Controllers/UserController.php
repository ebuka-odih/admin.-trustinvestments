<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function fundAcct()
    {
        return view('dashboard.fund-account');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }
    public function editProfile($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update(['name' => $request->name, 'phone' => $request->phone, 'wallet_address'=> $request->wallet_address]);
        return redirect()->back();
    }
}
