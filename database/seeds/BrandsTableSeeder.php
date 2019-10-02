<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    private const BRANDS = [
        'Audi',
        'Alfa Romeo',
        'Toyota',
        'Volvo'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::BRANDS as $brand) {
            Brand::insert(['name' => $brand]);
        }
    }
}
