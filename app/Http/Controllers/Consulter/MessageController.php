<?php

namespace App\Http\Controllers\Consulter;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return auth('consulter')->user()->received_messages;
    }
}
