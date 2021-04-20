<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index', compact(['users', 'roles']));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        $user->roles()->sync($request->input('role_id'));

        return redirect()->route('users.index')->with('success', 'User has been saved');

    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact(['user', 'roles']));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->only('name', 'email'));
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with('success', 'User has been updated');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted');
    }
}
