<?php

use App\Fuel;
use Illuminate\Database\Seeder;

class FuelTypesTableSeeder extends Seeder
{
    private const FUEL_TYPES = [
        'Diesel',
        'Electricity',
        'Gas'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::FUEL_TYPES as $fuelType) {
            Fuel::insert(['name' => $fuelType]);
        }
    }
}
