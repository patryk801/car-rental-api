<?php

namespace App\Policies;

use App\Permission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return $user->hasPermission(Permission::PERMISSION_CREATE);
    }

    public function read(User $user): bool
    {
        return $user->hasPermission(Permission::PERMISSION_READ);
    }

    public function update(User $user): bool
    {
        return $user->hasPermission(Permission::PERMISSION_UPDATE);
    }

    public function delete(User $user): bool
    {
        return $user->hasPermission(Permission::PERMISSION_DELETE);
    }
}
