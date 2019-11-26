<?php

namespace App\Policies;

use App\Permission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->hasPermission(Permission::BRAND_CREATE);
    }

    public function read(User $user): bool
    {
        return $user->hasPermission(Permission::BRAND_READ);
    }

    public function update(User $user): bool
    {
        return $user->hasPermission(Permission::BRAND_UPDATE);
    }

    public function delete(User $user): bool
    {
        return $user->hasPermission(Permission::BRAND_DELETE);
    }
}
