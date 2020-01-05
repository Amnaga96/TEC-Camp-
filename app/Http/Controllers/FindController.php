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

       

        return redirect('/home');
    }


    

    
    


}

