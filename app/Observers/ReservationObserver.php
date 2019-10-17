<?php

namespace App\Observers;

use App\Billing\ReservationPriceCalculator;
use App\Reservation;

class ReservationObserver
{
    public function creating(Reservation $reservation): void
    {
        $calculator = new ReservationPriceCalculator($reservation);
        $reservation->price = $calculator->getPrice();
    }
}
