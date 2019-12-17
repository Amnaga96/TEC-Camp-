<?php

namespace App\Http\Controllers;

use App\Consulter;
use App\Message;
use Illuminate\Http\Request;
use \App\Question;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $questions = Message::all();
        //  return $a ;
        return view('questions.index', ['questions'=> $questions]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ask", [
            'consulters' => Consulter::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        $ques = new Message();
        $ques->title= request('title');
        $ques->body= request('body');

        //$consulter= Consulter::find(request('doctor'));

        request()->validate([
         'doctor' => 'required|unique:categories'
        ]);

        $msg =  auth()->user()->sent_messages()->make($ques->toArray());
        $msg->receiver()->associate($consulter);
        $msg->save();

        // $ques-> save();
        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($qid)
    {
        $question = Message::find($qid);
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
