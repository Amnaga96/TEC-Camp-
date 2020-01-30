<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\specialization;
use App\clinic;
use App\Doctor;
use App\Http\Controllers\Controller;


class DoctorController extends Controller
{


    public function page()
    {
        

        $doctors = Doctor::with('specialization','clinics')->get();        
        return view('admin.find_feature.DoctorsPage', [

            'doctors' => $doctors
        ]);

    }

    public function index()
    {
        return view('admin.find_feature.index');
    }


    public function create()
    {
        return view('doctors.create')->with(['specializations' => specialization::All() , 'clinics' => clinic::All()] );
    }
    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required',
            


            
        ]);

        $doctor = new Doctor;
        $doctor -> name = $request->name;
        $doctor ->save();
        $doctor->specialization()->sync($request->specialization);
        $doctor->clinics()->sync($request->clinic);

         return redirect()->route('clinic.index');

    }
    public function edit($id){
        return view('doctors.edit', [
            'doctor'=>Doctor::find($id)
            ]);

    } 
    public function update($id)
    {
        request()->validate([
            'name' => 'required', 
        ]);

        $doctor = Doctor::find($id);
        $doctor ->name= request('name');
        $doctor ->save();
        $doctor->specialization()->sync($request->specialization);
        $doctor->clinics()->sync($request->clinic);

         return redirect()->route('clinic.index');

    }

    public function destroy($id){

        Doctor::find($id)->delete();
    
            return redirect()->route('doctor.page');
    }
    
}
