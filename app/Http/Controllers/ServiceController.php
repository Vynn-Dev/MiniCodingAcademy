<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    \App\Models\Service::create($data);

    return redirect()->route('admin.services.index');
}

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

public function update(Request $request, \App\Models\Service $service)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $service->update($data);

    return redirect()->route('admin.services.index');
}

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Deleted!');
    }
}
