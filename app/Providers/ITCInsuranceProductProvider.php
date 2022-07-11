<?php

namespace App\Providers;

use App\Services\ClientApi;
use App\Services\ITCInsuranceService;
use Illuminate\Support\ServiceProvider;

class ITCInsuranceProductProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ITCInsuranceService::class, function ($app) {
            return new ITCInsuranceService(new ClientApi());
        });
    }
}
