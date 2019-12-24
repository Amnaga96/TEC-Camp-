<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query();

        // filtering

        return view('admin.users.index', [
            'users' => $users->get()
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
}
