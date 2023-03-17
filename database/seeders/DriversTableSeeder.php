<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $drivers = [
            [
                'driver_name' => 'Lewis Hamilton',
                'driver_team' => 'Mercedes',
                'driver_score' => 16
            ],
            [
                'driver_name' => 'Charles Leclerc',
                'driver_team' => 'Ferrari',
                'driver_score' => 0
            ],
            [
                'driver_name' => 'Sergio Perez',
                'driver_team' => 'Redbull',
                'driver_score' => 18
            ],
        ];

        foreach($drivers as $key => $value){
            Driver::create($value);
        }
    }
}
