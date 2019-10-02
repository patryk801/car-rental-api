<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Equipment
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $cars
 * @property-read int|null $cars_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipment whereName($value)
 * @mixin \Eloquent
 */
class Equipment extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class);
    }
}
