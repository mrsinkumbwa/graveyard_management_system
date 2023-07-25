<?php

// app/Http/Controllers/AdvertisementController.php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    // Fetch all advertisements
    public function index()
    {
        $advertisements = Advertisement::all();
        return response()->json($advertisements);
    }

    // Create a new advertisement
    public function store(Request $request)
    {
        $advertisement = Advertisement::create($request->all());
        return response()->json($advertisement, 201);
    }

    // Fetch a single advertisement by ID
    public function show($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return response()->json($advertisement);
    }

    // Update an advertisement by ID
    public function update(Request $request, $id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->update($request->all());
        return response()->json($advertisement, 200);
    }

    // Delete an advertisement by ID
    public function destroy($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->delete();
        return response()->json(null, 204);
    }
}

