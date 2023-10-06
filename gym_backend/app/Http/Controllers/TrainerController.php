<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;



class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }
    public function create()
    {
        return view('trainers.create');
    }
    public function store(Request $request)
    {
        Trainer::create($request->all());
        return redirect()->route('trainers.index')->with('success', 'Trainer successfully created');

    }
    public function edit($id)
    {
        $trainner = Trainer::find($id);
        return view('trainers.edit', compact('trainer'));

    }



}