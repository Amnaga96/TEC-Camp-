<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = auth()->user()->questions;

        return view('questions.index', [
            'questions'=> $questions,
            'title' => 'Patient asked questions'
            ]);
    }

    public function create()
    {
        return view("ask", [
            'therapists' => User::where('user_type', 'thetapist')
        ]);
    }

    public function store(Request $request)
    {
        //  Please add validation here later

        $ques = new Question();
        $ques->title= request('title');
        $ques->body= request('body');

        $consulter= Consulter::find(request('doctor'));

        $msg =  auth()->user()->questions()->make($ques->toArray());
        $msg->consulter()->associate($consulter);
        $msg->save();

        return redirect('questions');
    }
}
