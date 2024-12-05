<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusStatus;

class BusStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $StatusBus = [
            'Disponible',
            'Asignada',
            'Varada',
            'Mantenimiento',
            'Patios'
        ];
        foreach ( $StatusBus as $bus_statuses){
            BusStatus::create([
                'status_name' => $bus_statuses,
            ]);
        }
    }
}
