<?php
// app/Http/Controllers/RoleController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add the Auth facade

class RolesController extends Controller
{
    // Apply authentication middleware to protect the entire controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Fetch all roles
    public function index()
    {
        // Allow all authenticated users to view roles
        $this->authorize('view', Role::class);
        
        $roles = Role::all();
        return response()->json($roles);
    }

    // Create a new role
    public function store(Request $request)
    {
        // Only users with 'admin' role can create roles
        $this->authorize('create', Role::class);

        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    // Fetch a single role by ID
    public function show($id)
    {
        // Allow all authenticated users to view roles
        $this->authorize('view', Role::class);
        
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    // Update a role by ID
    public function update(Request $request, $id)
    {
        // Only users with 'admin' role can update roles
        $this->authorize('update', Role::class);
        
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return response()->json($role, 200);
    }

    // Delete a role by ID
    public function destroy($id)
    {
        // Only users with 'admin' role can delete roles
        $this->authorize('delete', Role::class);

        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(null, 204);
    }
}
?>
