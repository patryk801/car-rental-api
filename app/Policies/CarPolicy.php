<?php

namespace App\Policies;

use App\Permission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->hasPermission(Permission::CAR_CREATE);
    }

    public function read(User $user): bool
    {
        return $user->hasPermission(Permission::CAR_READ);
    }

    public function update(User $user): bool
    {
        return $user->hasPermission(Permission::CAR_UPDATE);
    }

    public function delete(User $user): bool
    {
        return $user->hasPermission(Permission::CAR_DELETE);
    }
}
