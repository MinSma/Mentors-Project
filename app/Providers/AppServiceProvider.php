<?php

namespace App\Providers;

use App\Repositories\MentorsRepository;
use App\Repositories\StudentsRepository;
use App\Repositories\UsersRepository;
use App\Services\LoginService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MentorsRepository::class);
        $this->app->singleton(StudentsRepository::class);
        $this->app->singleton(UsersRepository::class);
        $this->app->singleton(LoginService::class);
    }
}
