<?php

namespace App\Http\Controllers\Consulter;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/consulter/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('consulter.auth:consulter');
    }

    /**
     * Show the Consulter dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('consulter.home');
    }

}