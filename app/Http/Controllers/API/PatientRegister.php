<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
class PatienRegister extends Controller 
{
    public function register(){
         request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required'
         ]);
            $user = new user;
            $user ->name = request('name');
            $user ->email = request('email');
            $user ->password = bcrypt(request('password'));
            $user -> save();
            return ('hi')
    }
}
