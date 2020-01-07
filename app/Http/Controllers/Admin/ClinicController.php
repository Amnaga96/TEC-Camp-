<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Clinic;
use App\Area;


$clinics = Clinic::with('doctors');

class ClinicController extends Controller
{

    public function page()
    {

        $clinics = Clinic::All();

        return view('admin.find_feature.ClinicsPage', [

            'clinics' => $clinics
        ]);

    }


    public function index()
    {
        return view('admin.find_feature.index');
    }

    public function create()
    {
        return view('clinics.create')->with(['areas' => Area::All()]);
    }

    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'phone_number' => 'required|numeric',

        ]);


        $clinic = new clinic;
        $clinic -> name = $request->name;
        $clinic -> phone_number = $request->phone_number;
        $clinic -> area_id = $request->area;
        $clinic ->save();
         return redirect()->route('clinic.page');

    }
    public function destroy($id){

        Clinic::find($id)->delete();
    
            return redirect()->route('clinic.page');
    }
    

}
