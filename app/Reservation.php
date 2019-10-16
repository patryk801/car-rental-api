<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Reservation
 *
 * @property int $id
 * @property int $user_id
 * @property int $car_id
 * @property string $date_from
 * @property string $date_to
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Car $car
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereUserId($value)
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'date_from',
        'date_to',
        'price'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
