<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }
    public function customers()
    {
        $users = User::where('admin', 0)->latest()->get();
        return view('admin.customers', compact('users'));
    }

    public function editEquity($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-equity', compact('user'));
    }
    public function storeEquity(Request $request)
    {
        $request->validate([
            'balance' => 'nullable',
            'profit' => 'nullable',
            'bonus' => 'nullable',
            'investment' => 'nullable',
        ]);
        $id = $request->user_id;
        $user = User::findOrFail($id);
        if ($request->input('add') == 'add'){
            $user->balance += $request->balance;
            $user->profit += $request->profit;
            $user->bonus += $request->bonus;
            $user->investment += $request->investment;
            $user->save();
            return redirect()->back()->with('added', "Equity Added Successfully");
        }
        $user->balance -= $request->balance;
        $user->profit -= $request->profit;
        $user->bonus -= $request->bonus;
        $user->investment -= $request->investment;
        $user->save();
        return redirect()->back()->with('subtract', "Equity Subtract Successfully");



    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function updateWallet(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->wallet_address = $request->wallet_address;
        $user->save();
        return redirect()->back();
    }

    public function billing($id)
    {
        $user = User::findOrFail($id);
        return view('admin.message', compact('user'));
    }

    public function setBilling(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update(['message' => $request->message]);
        return redirect()->back();
    }





}
