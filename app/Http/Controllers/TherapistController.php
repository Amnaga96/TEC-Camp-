<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    /**
     * Here we are getting list of consulters from db,
     * filtering them by name or city if user requested that
     */
    public function index()
    {
        $consulters = User::where('user_type', 'therapist');

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
    public function show($qid)
    {
        $question = Question::find($qid);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        # code...
    }

    public function store()
    {
        # code...
    }
}
