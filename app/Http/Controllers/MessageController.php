<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
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
        Message::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
}
