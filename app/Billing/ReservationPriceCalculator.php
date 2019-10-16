<?php
namespace App\Billing;

use App\Reservation;

class ReservationPriceCalculator
{
    private $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function getPrice(): int
    {
        $numberOfDays = $this->reservation->date_to->diff($this->reservation->date_from)->format('%d');
        if ($numberOfDays > 0) return $this->reservation->car->price * $numberOfDays;

        return $this->reservation->car->price;
    }
}
