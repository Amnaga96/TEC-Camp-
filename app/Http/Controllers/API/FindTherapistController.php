<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\Area;
use App\specialization;
use App\Clinic;


class FindTherapistController extends Controller
{
    public function index()
    {
        $clinics = Clinic::with('doctors','area');

        

        // $clinics->when(request('specialization'), function($q) {
        //     $q->where('specialization', request('specialization'));
        // });

        // $clinics->when(request('area_id'), function($clinicQuery) {
        //         $clinicQuery->where('area_id', request('area_id'));
        // });

        return [
            'clinics' => $clinics->get(),
        ];
    }
}
