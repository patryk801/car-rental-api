<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * App\Model
 *
 * @property-read \App\Brand $brand
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Car[] $cars
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $brand_id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model whereName($value)
 * @property-read int|null $cars_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model filter($args)
 */
class Model extends EloquentModel
{
    protected $fillable = ['name', 'brand_id'];

    public $timestamps = false;

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeFilter(Builder $query, array $args): void
    {
        if (isset($args['filter'])) {
            $query
                ->where('name', 'LIKE', "%{$args['filter']}%")
                ->orWhereHas('brand', function ($query) use ($args) {
                    $query->where('name', 'LIKE', "%{$args['filter']}%");
                });
        }
    }
}
