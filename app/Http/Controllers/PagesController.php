<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index(){
    //   return view('pages.index');   
    // }

     public function index(){
         $title='home';
       return view('pages.index', compact('title'));   
    //    return view('pages.index')->with('title', $title);
     }

}
