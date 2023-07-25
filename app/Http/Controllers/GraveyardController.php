<?php

// app/Http/Controllers/GraveyardController.php

namespace App\Http\Controllers;

use App\Models\Graveyard;
use Illuminate\Http\Request;

class GraveyardController extends Controller
{
    // Fetch all graveyards
    public function index()
    {
        $graveyards = Graveyard::all();
        return response()->json($graveyards);
    }

    // Create a new graveyard
    public function store(Request $request)
    {
        $graveyard = Graveyard::create($request->all());
        return response()->json($graveyard, 201);
    }

    // Fetch a single graveyard by ID
    public function show($id)
    {
        $graveyard = Graveyard::findOrFail($id);
        return response()->json($graveyard);
    }

    // Update a graveyard by ID
    public function update(Request $request, $id)
    {
        $graveyard = Graveyard::findOrFail($id);
        $graveyard->update($request->all());
        return response()->json($graveyard, 200);
    }

    // Delete a graveyard by ID
    public function destroy($id)
    {
        $graveyard = Graveyard::findOrFail($id);
        $graveyard->delete();
        return response()->json(null, 204);
    }
}
