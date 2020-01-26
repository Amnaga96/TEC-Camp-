<?php

namespace App\Http\Controllers;

use App\Question;
use App\Reply;
use Illuminate\Http\Request;

class QuestionReplyController extends Controller
{
    public function store($id)
    {
            request()->validate([
            'reply' => 'required'
        ]);

        $reply = new Reply;
        $reply->body = request('reply');
        $reply->replier_id = auth()->id();

        $question = Question::find($id);
        $question->replies()->save($reply);
        return redirect()->back();
    }
}
