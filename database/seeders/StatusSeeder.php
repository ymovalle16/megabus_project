<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Status = [
            'Disponible',
            'Descanso',
            'Enfermo',
            'Calamidad Doméstica',
            'Incapacitado',
            'Permiso',
            'Vacaciones',
            'Suspendido',
            'Retirado'
        ];
        foreach ( $Status as $statuses){
            Status::create([
                'status_name' => $statuses,
            ]);
        }
    }
}
