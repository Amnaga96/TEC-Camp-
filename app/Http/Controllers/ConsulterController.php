<?php

namespace App\Http\Controllers;

use App\Consulter;
use Illuminate\Http\Request;

class ConsulterController extends Controller
{
    public function index()
    {
        $consulters = Consulter::query();

        $consulters->when(request('name'), function($q) {
            $q->where('name', 'LIKE', '%' . request('city') . '%');
        });

        $consulters->when(request('city'), function($q) {
            $q->where('city', request('city'));
        });

        return view('consulters.index', [
            'consulters' => $consulters->get()
        ]);
    }
}
