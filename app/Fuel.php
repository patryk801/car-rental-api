<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Fuel
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $cars
 * @property-read int|null $cars_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Fuel whereName($value)
 * @mixin \Eloquent
 */
class Fuel extends Model
{
    protected $table = 'fuel_types';
    
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
