<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\specialization;

class SpecializationController extends Controller
{


    public function page()
    {

        $specializations = specialization::all();
        

        
        return view('admin.find_feature.SpecializationsPage', [

            'specializations' => $specializations
        ]);
    }

    public function index()
    {
        return view('admin.find_feature.index');
    }

    public function create()
    {
        return view('specializations.create');
    }

    

    public function store(Request $request)
    {

        request()->validate([

            'name' => 'required',

        ]);
        
        $specialization = new specialization;
        $specialization -> name = $request->name;
        $specialization ->save();
        return redirect()->route('specialization.page');

    }

    public function delete($id)
    {
        specialization::find($id)->delete();

        return redirect('specialization.page');
    }

    public function destroy($id){

        specialization::find($id)->delete();
        
        return redirect()->route('specialization.page');
    }
    
}