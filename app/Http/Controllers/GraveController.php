<?php

// app/Http/Controllers/GraveController.php

namespace App\Http\Controllers;

use App\Models\Grave;
use Illuminate\Http\Request;

class GraveController extends Controller
{
    // Fetch all graves
    public function index()
    {
        $graves = Grave::all();
        return response()->json($graves);
    }

    // Create a new grave
    public function store(Request $request)
    {
        $grave = Grave::create($request->all());
        return response()->json($grave, 201);
    }

    // Fetch a single grave by ID
    public function show($id)
    {
        $grave = Grave::findOrFail($id);
        return response()->json($grave);
    }

    // Update a grave by ID
    public function update(Request $request, $id)
    {
        $grave = Grave::findOrFail($id);
        $grave->update($request->all());
        return response()->json($grave, 200);
    }

    // Delete a grave by ID
    public function destroy($id)
    {
        $grave = Grave::findOrFail($id);
        $grave->delete();
        return response()->json(null, 204);
    }
}
