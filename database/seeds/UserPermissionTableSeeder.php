<?php

use App\Permission;
use App\User;
use Illuminate\Database\Seeder;

class UserPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::whereId(1)->first();
        $permissions = Permission::all();

        $user->permissions()->attach($permissions);
    }
}
