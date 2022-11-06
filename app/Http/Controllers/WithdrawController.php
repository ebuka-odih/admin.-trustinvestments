<?php

namespace App\Http\Controllers;

use App\Mail\RequestWithdrawal;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        return view('dashboard.withdraw');
    }

    public function storeWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'method' => 'required',
            'bank_name' => 'nullable',
            'bank_account_name' => 'nullable',
            'bank_account_number' => 'nullable',
            'routine_number' => 'nullable',
            'wallet_address' => 'nullable',
            'crypto_currency' => 'nullable',
        ]);
        if (\auth()->user()->wt_suspense == 1){

            if (auth()->user()->balance > $request->amount){
                $withdraw = new Withdraw();
                if ($request->get('method') == 'bank_withdraw'){

                    $withdraw->user_id = Auth::id();
                    $withdraw->amount = $request->amount;
                    $withdraw->method = $request->get('method');
                    $withdraw->bank_name = $request->bank_name;
                    $withdraw->bank_account_name = $request->bank_account_name;
                    $withdraw->bank_account_number = $request->bank_account_number;
                    $withdraw->routine_number = $request->routine_number;
                    $withdraw->save();
                    Mail::to($withdraw->user->email)->send(new RequestWithdrawal($withdraw));
                    return redirect()->back()->with('success', "Withdrawal Request Sent");
                }
                $withdraw->user_id = Auth::id();
                $withdraw->amount = $request->amount;
                $withdraw->method = $request->get('method');
                $withdraw->wallet_address = $request->wallet_address;
                $withdraw->crypto_currency = $request->crypto_currency;
                $withdraw->save();
                Mail::to($withdraw->user->email)->send(new RequestWithdrawal($withdraw));
                return redirect()->back()->with('success', "Withdrawal Request Sent");
            }else{
                return redirect()->back()->with('declined', "Insufficient Fund");
            }

        }

        if (auth()->user()->balance > $request->amount){
            $withdraw = new Withdraw();
            if ($request->get('method') == 'bank_withdraw'){

                $withdraw->user_id = Auth::id();
                $withdraw->amount = $request->amount;
                $withdraw->method = $request->get('method');
                $withdraw->bank_name = $request->bank_name;
                $withdraw->bank_account_name = $request->bank_account_name;
                $withdraw->bank_account_number = $request->bank_account_number;
                $withdraw->routine_number = $request->routine_number;
                $withdraw->save();
                Mail::to($withdraw->user->email)->send(new RequestWithdrawal($withdraw));
                return redirect()->back()->with('declined', "Withdrawal Error, Please Contact Support");
            }
            $withdraw->user_id = Auth::id();
            $withdraw->amount = $request->amount;
            $withdraw->method = $request->get('method');
            $withdraw->wallet_address = $request->wallet_address;
            $withdraw->crypto_currency = $request->crypto_currency;
            $withdraw->save();
            Mail::to($withdraw->user->email)->send(new RequestWithdrawal($withdraw));
            return redirect()->back()->with('declined', "Withdrawal Error, Please Contact Support");
        }
        return redirect()->back()->with('declined', "Withdrawal Error, Please Contact Support");

    }
}
