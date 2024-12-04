<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Gustavo Adolfo Arias',
                'identification' => '999999999',
                'role_id' => '1',
                'license_expiration' => null,
                'status' => null,
                ]
        ]);
    }
}
