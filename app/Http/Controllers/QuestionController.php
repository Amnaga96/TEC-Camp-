<?php

namespace App\Http\Controllers;

use App\Consulter;
use App\Message;
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
<<<<<<< HEAD
        return view("ask");
       
=======
        return view("ask", [
            'consulters' => Consulter::all()
        ]);
>>>>>>> e6989385094a9aa29ac545e811665706a8793fe7
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $ques = new Question;
        $ques->title= request('title');
        $ques->body= request('body');
        $ques-> save();
        return redirect('questions');
=======
        // validation

        $ques = new Message();
        $ques->title= request('title');
        $ques->body= request('body');

        $consulter= Consulter::find(request('doctor'));

        $msg =  auth()->user()->sent_messages()->make($ques->toArray());
        $msg->receiver()->associate($consulter);
        $msg->save();

        // $ques-> save();
        // return redirect('questions');
>>>>>>> e6989385094a9aa29ac545e811665706a8793fe7
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
