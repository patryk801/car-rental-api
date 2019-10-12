<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    use WithFaker;

    public function __construct()
    {
        $this->setUpFaker();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            User::insert([
                'name' => $this->faker->name,
                'surname' => $this->faker->lastName,
                'email' => $this->faker->email,
                'phone_number' => $this->faker->e164PhoneNumber,
                'password' => Hash::make('password'),
                'created_at' => new \DateTime()
            ]);
        }
    }
}
