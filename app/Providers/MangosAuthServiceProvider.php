<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Hashing\BcryptHasher;

class MangosAuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('mangos', function ($app, array $config) {
            return new MangosUserProvider(BcryptHasher::class, \App\User::class);
        });
    }
}
