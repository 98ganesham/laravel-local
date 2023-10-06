<?php

namespace App\Http\Controllers;

use App\Models\Gym_Member_Details;
use Illuminate\Http\Request;

class Gym_Member_DetailsController extends Controller
{
    public function index()
    {
        $memberShip = Gym_Member_Details::all();
        return view('member_details.index', compact('memberShip'));
    }
    public function create()
    {
        return view('member_details.create');
    }
    public function store(Request $request)
    {
        Gym_Member_Details::create($request->all());
        return redirect()->route('member_details.index')->with('success', 'Member details created successfull');
    }
    public function edit($id)
    {
        $memberShip = Gym_member_Details::find($id);
        return view('member_details.edit', compact('memberShip', 'memberShip'));
    }
    public function update(Request $request, $id)
    {
        $memberShip = Gym_Member_Details::find($id);
        $memberShip->update($request->all());
        return redirect()->route('member_details.index')->with('success', 'Member details updated successfully');
    }
    public function destory($id)
    {
        $memeberShip = Gym_Member_Details::find($id);
        $memeberShip->delete();
        return redirect()->route('member_details.index')->with('success', 'Member details deleted successfully');
    }
}