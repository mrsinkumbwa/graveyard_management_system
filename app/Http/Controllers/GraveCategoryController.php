<?php

// app/Http/Controllers/GraveCategoryController.php

namespace App\Http\Controllers;

use App\Models\GraveCategory;
use Illuminate\Http\Request;

class GraveCategoryController extends Controller
{
    // Fetch all grave categories
    public function index()
    {
        $graveCategories = GraveCategory::all();
        return response()->json($graveCategories);
    }

    // Create a new grave category
    public function store(Request $request)
    {
        $graveCategory = GraveCategory::create($request->all());
        return response()->json($graveCategory, 201);
    }

    // Fetch a single grave category by ID
    public function show($id)
    {
        $graveCategory = GraveCategory::findOrFail($id);
        return response()->json($graveCategory);
    }

    // Update a grave category by ID
    public function update(Request $request, $id)
    {
        $graveCategory = GraveCategory::findOrFail($id);
        $graveCategory->update($request->all());
        return response()->json($graveCategory, 200);
    }

    // Delete a grave category by ID
    public function destroy($id)
    {
        $graveCategory = GraveCategory::findOrFail($id);
        $graveCategory->delete();
        return response()->json(null, 204);
    }
}
