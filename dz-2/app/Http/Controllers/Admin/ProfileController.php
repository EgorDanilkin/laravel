<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileSaveRequest;
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
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('admin.profile.create');
    }

    public function store(AdminProfileSaveRequest $request, User $user)
    {
        if ($request->password === $request->confirm_password) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = \Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('admin::profile');
    }

    public function edit(User $user)
    {
        return view('admin.profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(AdminProfileSaveRequest $request, User $user)
    {
        if (\Hash::check($request->current_password, $user->password)) {
            $user->name = $request->name;
            $user->email = $request->email;
            if (!empty($request->password)) {
                $user->password = \Hash::make($request->password);
            }
            $user->save();
        }

        return redirect()->route('admin::profile::show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin::profile');
    }
}
