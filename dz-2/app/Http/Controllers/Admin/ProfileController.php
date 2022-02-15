<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('admin.profile.index', [
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        return view('admin.profile.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        dd($user, $request);
        if(\Hash::check($request->current_password, $user->password)) {
            dd($request);
        }
    }
}
