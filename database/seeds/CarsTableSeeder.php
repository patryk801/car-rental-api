<?php

use App\Brand;
use App\Car;
use App\Fuel;
use App\Model;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toyotaBrand = Brand::where('name', 'Toyota')->first();
        $models = Model::where('brand_id', $toyotaBrand->id)->get();
        $fuelType = Fuel::where('name', 'Gas')->first();

        foreach ($models as $model) {
            Car::insert([
                'brand_id' => $model->brand->id,
                'model_id' => $model->id,
                'fuel_id' => $fuelType->id,
                'year_of_production' => 2019,
                'price' => 100
            ]);
        }
    }
}
