<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'team_name' => 'Redbull',
                'team_score' => 43
            ],
            [
                'team_name' => 'Ferrari',
                'team_score' => 52
            ],
            [
                'team_name' => 'Mercedes',
                'team_score' => 48
            ]
        ];

        foreach($cars as $key => $value) {
            Car::create($value);
        }
    }
}
