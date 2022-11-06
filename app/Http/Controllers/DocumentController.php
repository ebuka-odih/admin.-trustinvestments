<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function document()
    {
        return view('dashboard.document');
    }

    public function storeDocument(Request $request)
    {

        $request->validate([
                'id_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'id_back' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        if ($request->hasFile('id_front') && $request->hasFile('id_back')){

            $image = $request->file('id_front');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/documents');
            $image->move($destinationPath, $input['imagename']);

            $image_2 = $request->file('id_back');
            $input['imagename_2'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/documents');
            $image_2->move($destinationPath, $input['imagename_2']);

            $document = new Document();
            $document->user_id = Auth::id();
            $document->id_front = $input['imagename'];
            $document->id_back = $input['imagename_2'];
            $document->save();
            return redirect()->back()->with('success', "Uploaded Successfully");
        }
        return redirect()->back();

    }


}
