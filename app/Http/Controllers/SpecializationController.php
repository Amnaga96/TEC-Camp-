<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialization;

class SpecializationController extends Controller
{
    public function create()
    {
        return view('specializations.create');
    }

    public function index()
    {
        return view('admin.clinics.index');
    }

    public function store(Request $request)
    {
        $specialization = new specialization;
        $specialization -> name = $request->name;
        $specialization ->save();
         return redirect()->route('clinics');

    }
}
