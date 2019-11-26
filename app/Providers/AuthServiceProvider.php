<?php

namespace App\Providers;

use App\Brand;
use App\Car;
use App\Equipment;
use App\Fuel;
use App\Model;
use App\Permission;
use App\Policies\BrandPolicy;
use App\Policies\CarPolicy;
use App\Policies\EquipmentPolicy;
use App\Policies\FuelPolicy;
use App\Policies\ModelPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\ReservationPolicy;
use App\Policies\UserPolicy;
use App\Reservation;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Brand::class => BrandPolicy::class,
        Car::class => CarPolicy::class,
        Equipment::class => EquipmentPolicy::class,
        Fuel::class => FuelPolicy::class,
        Model::class => ModelPolicy::class,
        Permission::class => PermissionPolicy::class,
        Reservation::class => ReservationPolicy::class,
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
