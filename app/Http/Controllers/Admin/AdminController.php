<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.index', compact('users'));
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function storeSettings(Request $request)
    {

        setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back();
    }

    public function openWithdraw($id)
    {
        $user = User::findOrFail($id);
        $user->wt_status = 3;
        $user->save();
        return redirect()->back()->with('opened', "Withdrawal Successfully");
    }
    public function closeWithdraw($id)
    {
        $user = User::findOrFail($id);
        $user->wt_status = 0;
        $user->save();
        return redirect()->back()->with('closed', "Withdrawal Closed Successfully");
    }
    public function suspendWithdraw($id)
    {
        $user = User::findOrFail($id);
        $user->wt_suspense = 0;
        $user->save();
        return redirect()->back()->with('suspended', "Withdrawal Suspended Successfully");
    }
    public function unsuspendWithdraw($id)
    {
        $user = User::findOrFail($id);
        $user->wt_suspense = 1;
        $user->save();
        return redirect()->back()->with('unsuspended', "Withdrawal Unsuspended Successfully");
    }



}
