<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reply;
use App\Question;

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
