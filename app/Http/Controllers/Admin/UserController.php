<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->groupBy('user_type');
        // return $users;
        // filtering

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        // TODO - Validation
         request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required'
        ]);

        $therapist = new User;
        $therapist->user_type = request('user_type');
        $therapist->name = request('name');
        $therapist->email = request('email');
        $therapist->password = bcrypt(request('password'));
        $therapist->save();

        return redirect('admin/users');
    }

    public function edit($id)
    {
        // todo
        //return view('admin/edit', compact($id));

         return view('Admin.edit',  [
            'user'=>User::find($id)
        ]);
    }
   

     public function update($id)
    {
        // todo
           request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required'
        ]);
            $user = User::find($id);  
        $user->user_type = request('user_type');
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/users');      
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('admin/users');
    }
}
