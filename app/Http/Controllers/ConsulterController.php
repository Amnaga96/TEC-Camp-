<?php

namespace App\Http\Controllers;

use App\Consulter;
use Illuminate\Http\Request;

class ConsulterController extends Controller
{
    /**
     * Here we are getting list of consulters from db,
     * filtering them by name or city if user requested that
     */
    public function index()
    {
        $consulters = Consulter::query();

        $consulters->when(request('name'), function($q) {
            $q->where('name', 'LIKE', '%' . request('city') . '%');
        });

        $consulters->when(request('city'), function($q) {
            $q->where('city', request('city'));
        });

        // TODO - style the following view
        return view('consulters.index', [
            'consulters' => $consulters->get()
        ]);
    }
}
