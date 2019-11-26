<?php

namespace App\Policies;

use App\Permission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EquipmentPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->hasPermission(Permission::EQUIPMENT_CREATE);
    }

    public function read(User $user): bool
    {
        return $user->hasPermission(Permission::EQUIPMENT_READ);
    }

    public function update(User $user): bool
    {
        return $user->hasPermission(Permission::EQUIPMENT_UPDATE);
    }

    public function delete(User $user): bool
    {
        return $user->hasPermission(Permission::EQUIPMENT_DELETE);
    }
}
