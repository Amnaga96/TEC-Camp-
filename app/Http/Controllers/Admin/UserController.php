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
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('admin/users');
    }
}
