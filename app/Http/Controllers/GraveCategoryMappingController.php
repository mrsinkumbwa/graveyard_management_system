<?php

// app/Http/Controllers/GraveCategoryMappingController.php

namespace App\Http\Controllers;

use App\Models\GraveCategoryMapping;
use Illuminate\Http\Request;

class GraveCategoryMappingController extends Controller
{
    // Fetch all grave category mappings
    public function index()
    {
        $graveCategoryMappings = GraveCategoryMapping::all();
        return response()->json($graveCategoryMappings);
    }

    // Create a new grave category mapping
    public function store(Request $request)
    {
        $graveCategoryMapping = GraveCategoryMapping::create($request->all());
        return response()->json($graveCategoryMapping, 201);
    }

    // Fetch a single grave category mapping by ID
    public function show($id)
    {
        $graveCategoryMapping = GraveCategoryMapping::findOrFail($id);
        return response()->json($graveCategoryMapping);
    }

    // Update a grave category mapping by ID
    public function update(Request $request, $id)
    {
        $graveCategoryMapping = GraveCategoryMapping::findOrFail($id);
        $graveCategoryMapping->update($request->all());
        return response()->json($graveCategoryMapping, 200);
    }

    // Delete a grave category mapping by ID
    public function destroy($id)
    {
        $graveCategoryMapping = GraveCategoryMapping::findOrFail($id);
        $graveCategoryMapping->delete();
        return response()->json(null, 204);
    }
}
