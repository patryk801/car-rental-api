<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Car
 *
 * @property-read \App\Brand $brand
 * @property-read \App\Model $model
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $brand_id
 * @property int $model_id
 * @property int $year_of_production
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereYearOfProduction($value)
 * @property int $fuel_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Equipment[] $equipment
 * @property-read int|null $equipment_count
 * @property-read \App\Fuel $fuel
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car filter($args)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereFuelId($value)
 */
class Car extends Model
{
    protected $fillable = ['brand_id', 'model_id', 'fuel_id', 'year_of_production', 'price'];

    public $timestamps = false;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(\App\Model::class);
    }

    public function fuel(): BelongsTo
    {
        return $this->belongsTo(Fuel::class);
    }

    public function equipment(): BelongsToMany
    {
        return $this->belongsToMany(Equipment::class);
    }

    public function scopeFilter(Builder $query, array $args): void
    {
        if (isset($args['filter'])) {
            $query
                ->whereHas('brand', function ($query) use ($args) {
                    $query->where('name', 'LIKE', "%{$args['filter']}%");
                })
                ->orWhereHas('model', function ($query) use ($args) {
                    $query->where('name', 'LIKE', "%{$args['filter']}%");
                });
        }
    }
}
