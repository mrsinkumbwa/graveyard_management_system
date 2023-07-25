<?php

// database/seeders/RolesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Regular User'],
            ['name' => 'Service Provider'],
            ['name' => 'Supplier'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    }
}
