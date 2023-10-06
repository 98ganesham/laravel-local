<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }
    public function create()
    {
        return view('services.create');
    }
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', compact('service'));

    }
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }
    public function deleteService(Request $request, $id, $serviceId)
    {
        $service = Service::find($serviceId);
        if ($service) {
            $service->services()->detach($service);
            return redirect()->route('services.index')->with('success', 'Service Not Found');
        } else {
            return redirect()->route('services.index')->with('error', 'Failed to delete service');
        }
    }
}