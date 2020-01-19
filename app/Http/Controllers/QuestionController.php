<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $user =  auth()->user();

        if ($user->user_type == 'patient') {
            $questions = $user->asked_questions;
        } elseif ($user->user_type == 'therapist') {
            $questions = $user->recevied_questions;
        }

        return view('questions.index', [
            'questions'=> $questions,
            ]);
    }

    public function create()
    {
        return view("ask", [
            'therapists' => User::where('user_type', 'therapist')->get()
        ]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'therapist' => 'required',
            'patient' => 'required'
        ]);

        $ques = new Question();
        $ques->title= request('title');
        $ques->body= request('body');
        $ques->therapist_id = request('therapist');
        $ques->patient_id = auth()->id();
        $ques->save();

        return redirect()->route('questions');
    }

    public function show($qid)
    {
        $question =  Question::with('replies')->find($qid);
        return view('questions.show', compact('question'));
    }
}
