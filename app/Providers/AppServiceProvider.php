<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Service
use App\Services\UserService;

// Repository
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Service
        $this->app->bind('UserService', UserService::class);

        // Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
