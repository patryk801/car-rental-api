<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    const BRAND_CREATE = 'BRAND_CREATE';
    const BRAND_READ = 'BRAND_READ';
    const BRAND_UPDATE = 'BRAND_UPDATE';
    const BRAND_DELETE = 'BRAND_DELETE';

    const CAR_CREATE = 'CAR_CREATE';
    const CAR_READ = 'CAR_READ';
    const CAR_UPDATE = 'CAR_UPDATE';
    const CAR_DELETE = 'CAR_DELETE';

    const EQUIPMENT_CREATE = 'EQUIPMENT_CREATE';
    const EQUIPMENT_READ = 'EQUIPMENT_READ';
    const EQUIPMENT_UPDATE = 'EQUIPMENT_UPDATE';
    const EQUIPMENT_DELETE = 'EQUIPMENT_DELETE';

    const FUEL_CREATE = 'FUEL_CREATE';
    const FUEL_READ = 'FUEL_READ';
    const FUEL_UPDATE = 'FUEL_UPDATE';
    const FUEL_DELETE = 'FUEL_DELETE';

    const MODEL_CREATE = 'MODEL_CREATE';
    const MODEL_READ = 'MODEL_READ';
    const MODEL_UPDATE = 'MODEL_UPDATE';
    const MODEL_DELETE = 'MODEL_DELETE';

    const PERMISSION_CREATE = 'PERMISSION_CREATE';
    const PERMISSION_READ = 'PERMISSION_READ';
    const PERMISSION_UPDATE = 'PERMISSION_UPDATE';
    const PERMISSION_DELETE = 'PERMISSION_DELETE';

    const RESERVATION_CREATE = 'RESERVATION_CREATE';
    const RESERVATION_READ = 'RESERVATION_READ';
    const RESERVATION_UPDATE = 'RESERVATION_UPDATE';
    const RESERVATION_DELETE = 'RESERVATION_DELETE';

    const USER_CREATE = 'USER_CREATE';
    const USER_READ = 'USER_READ';
    const USER_UPDATE = 'USER_UPDATE';
    const USER_DELETE = 'USER_DELETE';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_permission');
    }
}
