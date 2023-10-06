<?php

namespace App\Http\Controllers;

use App\Models\Gym_Payments;
use Illuminate\Http\Request;

class Gym_PaymentController extends Controller
{
    public function index()
    {
        $gymPayments = Gym_Payments::all();
        return view('gym_payments.index', compact('gymPayments'));
    }
    public function create()
    {
        return view('gym_payments.create');
    }
    public function store(Request $request)
    {
        Gym_Payments::create($request->all());
        return redirect()->route('gym_payments.index')
            ->with('success', 'Gym payments created successfully');

    }
    public function edit($id)
    {
        $gymPayment = Gym_Payments::find($id);
        return view('gym_payments.edit', compact('gymPayment'));
    }
    public function update(Request $request, $id)
    {
        $gymPayment = Gym_Payments::find($id);
        $gymPayment->update($request->all());
        return redirect()->route('gym_payments.index')->with('success', 'Gym Payment updated successfully');
    }
}