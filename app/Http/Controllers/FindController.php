<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\find;
use db;
use App\Doctor;
use App\Area;
use App\specialization;
use App\Clinic;

class FindController extends Controller
{


    public function index()
    {

        $area = request('area_id');
        $specialization = request('specialization');
        
        $clinics = Clinic::with('doctors');

        $clinics->when(request('area_id'), function($clinicQuery) {
                $clinicQuery->where('area_id', request('area_id'));
        });

        $doctor_clinics = Doctor::with('clinics')->whereHas('clinics',function($query) use($area){
                                    $query->where('area_id',$area);
                                })
                                ->whereHas('specialization',function($query) use($specialization){
                                    $query->where('specializations.id',$specialization);
                                })
                                ->get()
                                ->pluck('clinics'); 

        // return $specializations;

        $clinics->when(request('specialization'), function($clinicQuery) use($doctor_clinics) {
            $clinicQuery->whereIn('id', $doctor_clinics);
        });

        // return $clinics->get();
        return view('find', [
            'clinics' => $clinics->get(),
            'areas' => Area::all(),
            'area' => $area,
            'specialization' => $specialization,
            'specializations' => specialization::all()
        ]);
    }


public function show()
{
return view('find', [
    'areas' => Area::all(),
    'specializations' => specialization::all(),
    'clinics' => [],
    'area' => null,
    'specialization' => null,
]); 

}

    

   

    

    
    


}

