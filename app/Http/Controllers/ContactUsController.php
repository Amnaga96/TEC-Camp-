<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;

class ContactUsController extends Controller
{
    public function contactUS()
   {
       return view('/');
   }

   public function contactSaveData(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       ContactUS::create($request->all());
       return back()->with('success', 'Thanks for contacting us!');
   }
}
