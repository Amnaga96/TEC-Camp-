<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;



class AreaController extends Controller
{


    

    public function page()
    {
        $areas = area::all();
       

        return view('admin.find_feature.AreasPage', [

            'areas' => $areas
        ]);

    }


    public function index()
    {
        return view('admin.find_feature.index');
    }

    
    public function create()
    {
        return view('areas.create');
    }
    
    public function store(Request $request)
    {
       

        request()->validate([

            'name' => 'required',

        ]);

        $area = new Area;
        $area -> name = $request->name;
        $area ->save();
        return redirect()->route('area.page');

    }

public function edit($id)
{
    return view('areas.edit' ,[
        'areas' => Area::all(),
        'area' => Area::find($id)


    ]);

  

}

public function destroy($id){

    Area::find($id)->delete();

        return redirect()->route('area.page');
}


}