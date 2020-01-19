<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
use App\User;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $user = User::first();
        // $questions = new Question();

        if ($user->user_type == 'patient') {
            $questions = $user->asked_questions;
        } elseif ($user->user_type == 'therapist') {
            $questions = $user->recevied_questions;
        }

        //    return response()->json(Question::all());
            return response()->json(User::all());
        // return response()->json($questions);

    }

    public function store(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'therapist' => 'required',
        ]);

        $ques = new Question();
        $ques->title= request('title');
        $ques->body= request('body');
        $ques->therapist_id = request('therapist');
        $ques->patient_id = auth('api')->id();
        //
        // Question()->first();
        $ques->save();

        // return redirect()->route('questions');
        // return $ques;
        return response()->json($ques);
    }

    public function show($qid)
    {
        $question =  Question::with('replies')->find($qid);
        // return view('questions.show', compact('question'));
        return response()->json( Question::with('replies')->find($qid));


    }
}
