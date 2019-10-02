<?php

use App\Equipment;
use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    private const EQUIPMENT = [
        'air condition',
        'radio',
        'navigation'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::EQUIPMENT as $item) {
            Equipment::insert(['name' => $item]);
        }
    }
}
