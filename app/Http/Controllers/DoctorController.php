<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialization;
use App\Doctor;


class DoctorController extends Controller
{
    public function create()
    {
        return view('doctors.create')->with(['specializations' => specialization::All()]);
    }
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor -> name = $request->name;
        $doctor ->save();

        $doctor->specialization()->sync($request->specialization);
         return redirect()->route('clinics');

    }
}
