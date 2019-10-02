<?php

use App\Car;
use App\Equipment;
use Illuminate\Database\Seeder;

class CarEquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::all();
        $equipment = Equipment::where('name', 'air condition')->first();

        foreach ($cars as $car) {
            $car->equipment()->attach($equipment->id);
        }
    }
}
