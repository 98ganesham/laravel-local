<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedBack;

class FeedbackController extends Controller
{
    // Show a list of feedback
    public function index()
    {
        $feedback = FeedBack::all();
        return view('feedback.index', compact('feedback'));
    }

    // Show the form for creating new feedback
    public function create()
    {
        return view('feedback.create');
    }

    // Store newly created feedback in the database
    public function store(Request $request)
    {
        Feedback::create($request->all());
        return redirect()->route('feedback.index')->with('success', 'Feedback submitted successfully');
    }

    // Show the form for editing feedback (if necessary)
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('feedback.edit', compact('feedback'));
    }

    // Update feedback (if necessary)
    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->update($request->all());
        return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully');
    }

    // Remove feedback from the database
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully');
    }
}