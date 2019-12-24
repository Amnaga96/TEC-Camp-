<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clinic;
use App\Area;

class ClinicController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('clinics.create')->with(['areas' => Area::All()]);
    }

    public function store(Request $request)
    {
        $clinic = new clinic;
        $clinic -> name = $request->name;
        $clinic -> phone_number = $request->phone_number;
        $clinic -> area_id = $request->area;
        $clinic ->save();
         return redirect()->route('doctors');

    }

}
