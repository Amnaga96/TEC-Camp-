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
        $questions = new Question();
        // $questions = Question::with('replies');

        if ($user->user_type == 'patient') {
            $questions = $user->asked_questions;
        } elseif ($user->user_type == 'therapist') {
            $questions = $user->recevied_questions;
        }

        // return response()->json(Question::all());
        // return response()->json(User::all());

        return response()->json($questions);
        //  return response()->json(Question::with('consulter', 'replies')->get());

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

        $ques->save();

        return response()->json($ques);
    }

    public function show($qid)
    {
        $question =  Question::with('replies')->find($qid);
        return response()->json( Question::with('replies')->find($qid));


    }
}
