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

        if ($user->user_type == 'patient') {
            $questions = $user->asked_questions;
        } elseif ($user->user_type == 'therapist') {
            $questions = $user->recevied_questions;
        }

        return $questions;
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
        $ques->patient_id = Question()->first();
        $ques->save();

        // return redirect()->route('questions');
        return $ques;
    }

    public function show($qid)
    {
        $question =  Question::with('replies')->find($qid);
        return view('questions.show', compact('question'));
    }
}
