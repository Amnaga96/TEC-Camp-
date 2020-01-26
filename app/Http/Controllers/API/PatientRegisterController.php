<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
class PatienRegister extends Controller 
{
   //  public function register(){
   //       request()->validate([
   //          'name' => 'required',
   //          'email' => 'required|email|unique:user',
   //          'password' => 'required',
   //          //'user_type' => 'required|min:8|confirmed'
   //       ]);
   //          $user = new user;
   //          $user ->name = request('name');
   //          $user ->email = request('email');
   //          $user ->password = bcrypt(request('password'));
   //          $user -> save();
   //          return ("hi");
   //  }
   protected function create(array $data)
{
    return User::forceCreate([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'api_token' => Str::random(80),
    ]);
}
}
