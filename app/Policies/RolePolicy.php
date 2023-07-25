<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        // Allow all authenticated users to view roles
        return true;
    }

    public function create(User $user)
    {
        // Only users with 'admin' role can create roles
        return $user->hasRole('admin');
    }

    public function update(User $user, Role $role)
    {
        // Only users with 'admin' role can update roles
        return $user->hasRole('admin');
    }

    public function delete(User $user, Role $role)
    {
        // Only users with 'admin' role can delete roles
        return $user->hasRole('admin');
    }
}

