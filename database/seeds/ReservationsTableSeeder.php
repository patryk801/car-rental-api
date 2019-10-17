<?php

use App\Car;
use App\Reservation;
use App\User;
use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 1)->first();
        $car = Car::where('id', 1)->first();

        Reservation::insert([
            'user_id' => $user->id,
            'car_id' => $car->id,
            'date_from' => new \DateTime(),
            'date_to' => new \DateTime(),
            'price' => 100,
            'created_at' => new \DateTime()
        ]);
    }
}
