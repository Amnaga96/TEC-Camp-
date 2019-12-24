<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use App\Area;
use App\specialization;

class DoctorController extends Controller
{
    
    public function index()
    {
        $doctors = Doctor::query();

        $doctors->when(request('name'), function($q) {
            $q->where('name', 'LIKE', '%' . request('name') . '%');
        });

        $doctors->when(request('city'), function($q) {
            $q->where('city', request('city'));
        });

        $doctors->when(request('area_id'), function($doctorQuery) {
            $doctorQuery->whereHas('clinics', function($clinicQuery) {
                $clinicQuery->where('area_id', request('area_id'));
            });
        });

        return view('find', [
            'doctors' => $doctors->get(),
            'areas' => Area::all()
        ]);
    }



    public function create()
    {
        return view('doctors.create')->with(['specializations' => specialization::All()]);
    }
    public function store(Request $request)
    {
        $doctor = new doctor;
        $doctor -> name = $request->name;
        $clinic -> spacialization_id = $request->specialization;
        $doctor ->save();
         return redirect()->route('doctors');

    }

}
