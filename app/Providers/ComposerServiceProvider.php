<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\AuthenticatedUserComposer;
use App\Http\ViewComposers\NotificationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', AuthenticatedUserComposer::class);
        View::composer('*', NotificationComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuthenticatedUserComposer::class);
        $this->app->singleton(NotificationComposer::class);
    }
}
