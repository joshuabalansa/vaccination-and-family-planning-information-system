<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Models\Appointment;
use App\Policies\AppointmentPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Appointment::class => AppointmentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        // Gate::define('admin', function (User $user) {

        //     return $user->role === 1;
        // });

        // Gate::define('patient', function (User $user) {

        //     return $user->role === 2;
        // });

        // Gate::define('healthcare', function (User $user) {

        //     return $user->role === 3;
        // });
    }
}
