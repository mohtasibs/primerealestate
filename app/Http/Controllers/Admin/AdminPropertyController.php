<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Admin;

class AdminPropertyController extends Controller
{
    // Get logged in admin from session
    private function getAdmin()
    {
        return Admin::find(session('admin_id'));
    }

    // Show all properties in dashboard
    public function index()
    {
        $admin = $this->getAdmin();
        $properties = Property::with('images')->get();
        return view('admin.properties.index', compact('admin', 'properties'));
    }

    // Show form to create new property
    public function create()
    {
        $admin = $this->getAdmin();
        return view('admin.properties.create', compact('admin'));
    }

    // Store new property
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'price'         => 'required|numeric',
            'rent'          => 'nullable|numeric',
            'deposit'       => 'nullable|numeric',
            'bedrooms'      => 'required|integer',
            'bathrooms'     => 'required|integer',
            'size'          => 'nullable|string|max:50',
            'year_built'    => 'nullable|integer',
            'property_type' => 'nullable|string|max:100',
            'status'        => 'nullable|string|max:100',
            'description'   => 'nullable|string',
            'latitude'      => 'nullable|numeric',
            'longitude'     => 'nullable|numeric',
        ]);

        Property::create($validated);

        return redirect()->route('admin.properties.index')->with('success', 'Property added successfully!');
    }

    // Show property details
    public function show($id)
    {
        $admin = $this->getAdmin();
        $property = Property::with('images')->findOrFail($id);
        return view('admin.properties.show', compact('admin', 'property'));
    }

    // Show edit form
    public function edit($id)
    {
        $admin = $this->getAdmin();
        $property = Property::with('images')->findOrFail($id);
        return view('admin.properties.edit', compact('admin', 'property'));
    }

    // Update property
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'price'         => 'required|numeric',
            'rent'          => 'nullable|numeric',
            'deposit'       => 'nullable|numeric',
            'bedrooms'      => 'required|integer',
            'bathrooms'     => 'required|integer',
            'size'          => 'nullable|string|max:50',
            'year_built'    => 'nullable|integer',
            'property_type' => 'nullable|string|max:100',
            'status'        => 'nullable|string|max:100',
            'description'   => 'nullable|string',
            'latitude'      => 'nullable|numeric',
            'longitude'     => 'nullable|numeric',
        ]);

        $property->update($validated);

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
