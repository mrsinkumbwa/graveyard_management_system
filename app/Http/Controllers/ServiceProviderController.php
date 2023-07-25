<?php

// app/Http/Controllers/ServiceProviderController.php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    // Fetch all service providers
    public function index()
    {
        $serviceProviders = ServiceProvider::all();
        return response()->json($serviceProviders);
    }

    // Create a new service provider
    public function store(Request $request)
    {
        $serviceProvider = ServiceProvider::create($request->all());
        return response()->json($serviceProvider, 201);
    }

    // Fetch a single service provider by ID
    public function show($id)
    {
        $serviceProvider = ServiceProvider::findOrFail($id);
        return response()->json($serviceProvider);
    }

    // Update a service provider by ID
    public function update(Request $request, $id)
    {
        $serviceProvider = ServiceProvider::findOrFail($id);
        $serviceProvider->update($request->all());
        return response()->json($serviceProvider, 200);
    }

    // Delete a service provider by ID
    public function destroy($id)
    {
        $serviceProvider = ServiceProvider::findOrFail($id);
        $serviceProvider->delete();
        return response()->json(null, 204);
    }
}
