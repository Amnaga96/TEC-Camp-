<?php

namespace App\Http\Controllers\Consulter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = auth('consulter')->user()->questions;

        return view('questions.index', [
            'questions'=> $questions,
            'title' => 'Consulter asked questions'
            ]);
    }

    public function show($qid)
    {
        $question = Question::find($qid);
        return view('questions.show', compact('question'));
    }
}
