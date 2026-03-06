<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\AppSupport\AppProfil;

class AppProfileProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            try {
                $profileApp = AppProfil::first();
            } catch (\Throwable $e) {
                $profileApp = new AppProfil();
            }
            $view->with('profileApp', $profileApp);
        });
    }
}
