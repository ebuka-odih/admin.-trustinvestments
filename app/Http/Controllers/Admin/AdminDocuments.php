<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Mail\DocumentVerified;
use App\Notifications\DocumentVerify;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminDocuments extends Controller
{
    public function documents()
    {
        $documents = Document::all();
        return view('admin.documents', compact('documents'));
    }

    public function approveDoc($id)
    {
        $document = Document::findOrFail($id);
        $user = User::findOrFail($document->user_id);
        $document->status = 1;
        $document->save();
        $user->status = 1;
        $user->save();
        Mail::to($user->email)->send(new DocumentVerified($user));
//        $email = User::select('email')->findOrFail($document->user_id)->first();
//        $email->notify(new DocumentVerify($user));
        return redirect()->back();
    }


}
