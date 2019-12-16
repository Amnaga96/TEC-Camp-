<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Question;


class QuestionController extends Controller
{
    public function index()
    {
         $questions = Question::all();
         
        return view('questions.index', ['questions'=> $questions]);


    }

    public function create()
    {
        return view("ask");
       
    }

    public function store(Request $request)
    {
        $ques = new Question;
        $ques->title= request('title');
        $ques->body= request('body');
        $ques-> save();
        return redirect('questions');
    }

    public function show($qid)
    {
        $question = Question::find($qid);
        return view('questions.show', compact('question'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
