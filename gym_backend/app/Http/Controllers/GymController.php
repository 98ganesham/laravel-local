<?php

namespace App\Http\Controllers;


use App\Models\Gym;
use App\Models\Trainer;

use App\Models\User;
use Illuminate\Http\Request;

class GymController extends Controller
{
    public function index()
    {
        $gym = Gym::all();
        return view('gym.index', compact('gym'));
    }
    public function create()
    {
        return view('gym.create');

    }
    public function store(Request $request)
    {
        Gym::create($request->all());
        return redirect()->route('gym.index')->with('success', 'Gym created successfully');
    }
    public function editUser($id)
    {
        $gym = Gym::find($id);
        return view('gym.edit', compact('gym'));
    }
    public function editTrainner($id)
    {
        $gym = Gym::find($id);
        return view('gym.edit', compact('gym'));
    }
    public function updateUser(Request $request, $id)
    {
        $gym = Gym::find($id);
        $gym->update($request->all());
        return redirect()->route('gym.index')->with('success', 'Gym updated successfully');
    }
    public function updateTrainner(Request $request, $id)
    {
        $gym = Gym::find($id);
        $gym->update($request->all());
        return redirect()->route('gym.index')->with('success', 'Gym Trainner updated successfully');


    }
    public function delete(Request $request, $gymId, $userId, $trainnerId)
    {
        $gym = Gym::find($gymId);
        $user = User::find($userId);
        $trainner = Trainer::find($trainnerId);
        if ($gym && $user && $trainner) {
            $gym->users()->detach($user);
            $gym->trainners()->detach($trainner);
            return redirect()
                ->route('gym.edit', $gymId)
                ->with('success', 'User removed From gym successfully ');
        } else {
            return redirect()
                ->route('gym.edit', $gymId)
                ->with('error', 'Failed to remove user from gym ');
        }

    }
}