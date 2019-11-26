<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => Permission::BRAND_CREATE],
            ['name' => Permission::BRAND_READ],
            ['name' => Permission::BRAND_UPDATE],
            ['name' => Permission::BRAND_DELETE],
            ['name' => Permission::CAR_CREATE],
            ['name' => Permission::CAR_READ],
            ['name' => Permission::CAR_UPDATE],
            ['name' => Permission::CAR_DELETE],
            ['name' => Permission::EQUIPMENT_CREATE],
            ['name' => Permission::EQUIPMENT_READ],
            ['name' => Permission::EQUIPMENT_UPDATE],
            ['name' => Permission::EQUIPMENT_DELETE],
            ['name' => Permission::FUEL_CREATE],
            ['name' => Permission::FUEL_READ],
            ['name' => Permission::FUEL_UPDATE],
            ['name' => Permission::FUEL_DELETE],
            ['name' => Permission::MODEL_CREATE],
            ['name' => Permission::MODEL_READ],
            ['name' => Permission::MODEL_UPDATE],
            ['name' => Permission::MODEL_DELETE],
            ['name' => Permission::PERMISSION_CREATE],
            ['name' => Permission::PERMISSION_READ],
            ['name' => Permission::PERMISSION_UPDATE],
            ['name' => Permission::PERMISSION_DELETE],
            ['name' => Permission::RESERVATION_CREATE],
            ['name' => Permission::RESERVATION_READ],
            ['name' => Permission::RESERVATION_UPDATE],
            ['name' => Permission::RESERVATION_DELETE],
            ['name' => Permission::USER_CREATE],
            ['name' => Permission::USER_READ],
            ['name' => Permission::USER_UPDATE],
            ['name' => Permission::USER_DELETE],
        ];

        Permission::insert($permissions);
    }
}
