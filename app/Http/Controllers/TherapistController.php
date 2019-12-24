<?php

namespace App\Http\Controllers;

use App\Clinic;
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
        $therapists = User::where('user_type', 'therapist');

        $therapists->when(request('name'), function($q) {
            $q->where('name', 'LIKE', '%' . request('name') . '%');
        });

        $therapists->when(request('city'), function($q) {
            $q->where('city', request('city'));
        });

        $therapists->when(request('clinic_id'), function($therapistQuery) {
            $therapistQuery->whereHas('clinics', function($clinicQuery) {
                $clinicQuery->where('clinic_id', request('clinic_id'));
            });
        });

        // TODO - style the following view
        return view('therapists.index', [
            'therapists' => $therapists->get(),
            'clinics' => Clinic::all()
        ]);
    }
    public function show($qid)
    {
        $question = Question::find($qid);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        return view('therapists.create');
    }

    public function store()
    {
        // TODO - Validation

        $therapist = new User;
        $therapist->user_type = 'therapist';
        $therapist->name = request('name');
        $therapist->email = request('email');
        $therapist->password = bcrypt(request('password'));
        $therapist->save();

        return redirect('therapists');
    }
}
