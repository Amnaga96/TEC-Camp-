<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Specialization extends Controller
{
    public function create()
    {
        return view('specializations.create');
    }
    public function store(Request $request)
    {
        $specialization = new specialization;
        $specialization -> name = $request->name;
        $specialization ->save();
         return redirect()->route('doctors');

    }
}
