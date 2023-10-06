<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function create()
    {
        return view('users.create');

    }
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email|unique:users, email' . $id,
            'phone' => 'required | string | max:25',
            'status' => 'required | active, inactive',
            'type' => 'required|member, non_member',
        ]);


        User::create($validatedData);
        return redirect()->route('users.index')->with('success', 'User created Successfully');

    }




}