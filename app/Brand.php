<?php

namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Brand
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $cars
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model[] $models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand whereName($value)
 * @property-read int|null $cars_count
 * @property-read int|null $models_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Brand filter($args)
 */
class Brand extends EloquentModel
{
    protected $fillable = ['name'];

    public $timestamps = false;

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
    
    public function models(): HasMany
    {
        return $this->hasMany(Model::class);
    }

    public function scopeFilter(Builder $query, array $args): void
    {
        if (isset($args['filter'])) {
            $query->where('name', 'LIKE', "%{$args['filter']}%");
        }
    }
}
