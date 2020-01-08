<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use App\Area;
use App\specialization;
use App\Clinic;

class ClinicController extends Controller
{
    
    public function index()
    {
        $clinics = Clinic::with('doctors');

        $clinics->when(request('name'), function($q) {
            $q->where('name', 'LIKE', '%' . request('name') . '%');
        });

        $clinics->when(request('city'), function($q) {
            $q->where('city', request('city'));
        });

        $clinics->when(request('area_id'), function($clinicQuery) {
                $clinicQuery->where('area_id', request('area_id'));
        });

     

        return view('find', [
            'clinics' => $clinics->get(),
            'areas' => Area::all()
            
        ]);
    }



    

}
