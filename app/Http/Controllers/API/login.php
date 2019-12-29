<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class Log extends Controller
{
    public function login(){
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
         $user = new User;
         $user->email = request('email');
         $user->password = bcrypt(request('password'));
         $user-> save();
          return ('admin/users');

    }
}
