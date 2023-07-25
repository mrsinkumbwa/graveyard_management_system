<?php

// app/Http/Controllers/HistoricalBurialController.php

namespace App\Http\Controllers;

use App\Models\HistoricalBurial;
use Illuminate\Http\Request;

class HistoricalBurialController extends Controller
{
    // Fetch all historical burials
    public function index()
    {
        $historicalBurials = HistoricalBurial::all();
        return response()->json($historicalBurials);
    }

    // Create a new historical burial
    public function store(Request $request)
    {
        $historicalBurial = HistoricalBurial::create($request->all());
        return response()->json($historicalBurial, 201);
    }

    // Fetch a single historical burial by ID
    public function show($id)
    {
        $historicalBurial = HistoricalBurial::findOrFail($id);
        return response()->json($historicalBurial);
    }

    // Update a historical burial by ID
    public function update(Request $request, $id)
    {
        $historicalBurial = HistoricalBurial::findOrFail($id);
        $historicalBurial->update($request->all());
        return response()->json($historicalBurial, 200);
    }

    // Delete a historical burial by ID
    public function destroy($id)
    {
        $historicalBurial = HistoricalBurial::findOrFail($id);
        $historicalBurial->delete();
        return response()->json(null, 204);
    }
}
