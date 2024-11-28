<?php

// database/seeders/RoleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar múltiples registros a la vez
        Role::insert([
            ['rol_name' => 'Admin'],
            ['rol_name' => 'User'],
        ]);
    }
}

