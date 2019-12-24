<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\find;
use db;

class FindController extends Controller
{
    public function find()
    {
        return view("find");
    }

    public function create()
    {
        return view("find.create");
    }

    public function store()
    {

        
        $clinic = new clinic;
        $clinic -> name = request('clinic_name');
        $clinic -> phone_number = request('clinic_phone_number');
        $clinic ->save();



        $area = new area;
        $area -> name = request('area');
        $area ->save();
 

        $doctor = new doctor;
        $doctor -> name = request('doctor_name');
        $doctor ->save();


        $specialization = new specialization;
        $specialization -> name = request('doctor_specialization');


        return redirect('/home');
    }


    public function find_result(){

        return view("find.find_result");

    }

    
    


}

