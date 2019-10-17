<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            BrandsTableSeeder::class,
            ModelsTableSeeder::class,
            FuelTypesTableSeeder::class,
            EquipmentsTableSeeder::class,
            CarsTableSeeder::class,
            CarEquipmentTableSeeder::class,
            ReservationsTableSeeder::class
        ]);
    }
}
