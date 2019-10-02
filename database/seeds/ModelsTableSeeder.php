<?php

use App\Brand;
use App\Model;
use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    private const toyotaModels = [
        'Avensis',
        'Corolla',
        'Supra',
        'Yaris',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toyotaBrand = Brand::where('name', 'Toyota')->first();

        foreach (self::toyotaModels as $toyotaModel) {
            Model::insert([
                'name' => $toyotaModel,
                'brand_id' => $toyotaBrand->id
            ]);
        }
    }
}
