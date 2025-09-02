<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class AdminPropertyController extends Controller
{
    // Show all properties in dashboard
    public function index()
    {
        $admin = auth()->user();
        $properties = Property::with('images')->get(); // Load images for frontend/admin views
        return view('admin.properties.index', compact('admin', 'properties'));
    }

    // Show form to create new property
    public function create()
    {
        $admin = auth()->user();
        return view('admin.properties.create', compact('admin'));
    }

    // Store new property
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|numeric',
            'rent' => 'nullable|numeric',
            'deposit' => 'nullable|numeric',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'nullable|string|max:50',
            'year_built' => 'nullable|integer',
            'property_type' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        Property::create($request->all());

        return redirect()->route('admin.properties.index')->with('success', 'Property added successfully!');
    }

    // Show property details in admin
    public function show($id)
    {
        $admin = auth()->user();
        $property = Property::with('images')->findOrFail($id);
        return view('admin.properties.show', compact('admin', 'property'));
    }

    // Show edit form
    public function edit($id)
    {
        $admin = auth()->user();
        $property = Property::with('images')->findOrFail($id);
        return view('admin.properties.edit', compact('admin', 'property'));
    }

    // Update property
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|numeric',
            'rent' => 'nullable|numeric',
            'deposit' => 'nullable|numeric',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'nullable|string|max:50',
            'year_built' => 'nullable|integer',
            'property_type' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $property->update($request->all());

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully!');
    }

    // Delete property
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully!');
    }
}
